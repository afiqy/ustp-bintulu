<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Auth\AuthController;
use App\Http\HttpClient;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {   
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', $request->username)->first();
        } else {
            $user = User::where('username', $request->username)->first();
        }
        
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
                    // Make sure your login method in HttpClient accepts only necessary arguments
                    $http_response = HttpClient::login($user->email, $request->password);
                    $passport = json_decode($http_response);

                    if (isset($passport->access_token)) {
                        // Access token found in the response
                        $request->session()->put('access_token', $passport->access_token);

                        // Update user data
                        $user->update([
                            'access_token' => $passport->access_token,
                            'refresh_token' => $passport->refresh_token,
                            'last_login_at' => $user->current_login_at,
                            'current_login_at' => now()
                        ]);

                        // Store user object directly in the session
                        $request->session()->put('user', $user);

                        return redirect()->route('home');
                    } else {
                        // Access token not found in the response
                        flash('Access token not found in the response.')->error()->important();
                        return redirect()->route('login');
                    }
                }
            } else {
                // Incorrect password
                flash('Wrong password!')->error()->important();
                return redirect()->route('login');
            }
        } else {
            // User not found
            flash('There are no users associated with the username or email!')->error()->important();
            return redirect()->back()->withInput();
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $user = Auth::user();

        // Revoke tokens if available
        if ($user->tokens()->exists()) {
            $user->tokens()->delete();
        }

        // Logout
        Auth::logout();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
