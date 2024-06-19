<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', $request->username)->first();
        } else {
            $user = User::where('name', $request->username)->first();
        }
    
        if (!$user) {
            return redirect()->route('login')->withErrors(['username' => __('messages.The provided email or username does not exist.')]);
        }
    
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->route('login')->withErrors(['password' => __('messages.Kata laluan anda salah!')]);
        }
    
        if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
            $http_response = HttpClient::login($user->email, $request->password);
            $passport = json_decode($http_response);
    
            if (isset($passport->access_token)) {
                $request->session()->put('access_token', $passport->access_token);
                $user->update([
                    'access_token' => $passport->access_token,
                    'refresh_token' => $passport->refresh_token,
                    'last_login_at' => $user->current_login_at,
                    'current_login_at' => now()
                ]);
                $request->session()->put('user', $user);
                return redirect()->route('home');
            } else {
                return redirect()->route('login')->withErrors(['access_token' => 'Access token not found in the response.']);
            }
        }
    
        return redirect()->route('login')->withErrors(['credentials' => 'Invalid credentials.']);
    }
    
    

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        // Logout the user
        Auth::logout();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
