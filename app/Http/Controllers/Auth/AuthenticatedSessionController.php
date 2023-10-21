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
        // $request->authenticate();

        // $request->session()->regenerate();
        if(filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', $request->username)->first();
        }else{
            $user = User::where('username', $request->username)->first();
        }
        
        if($user){
            if(Hash::check($request->password, $user->password)){
                if(Auth::attempt(['email' => $user->email, 'password' => $request->password])){
                    $http_response    = HttpClient::login($user->email, $request->password);
                    $passport         = json_decode($http_response);
                  
                    $request->session()->put('access_token', $passport->access_token);
                    
                    $auth_user        = Auth::user();
                    $current_login_at = $auth_user->current_login_at!=null?$auth_user->current_login_at:null;
                    $auth_user->update([
                        'access_token'     => $passport->access_token,
                        'refresh_token'    => $passport->refresh_token,
                        'last_login_at'    => $current_login_at,
                        'current_login_at' => date('Y-m-d H:i:s')
                    ]);
                    $request->session()->put('user', $auth_user->toArray());
                    return redirect()->route('home');
                }
            }else{
                flash('Wrong password!')->error()->important();
                return redirect()->route('login');    
            }
        }else{
            flash('There are no user associated with the username or email!')->error()->important();
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
        $token = Auth::user()->tokens()->first();
        if($token){
            $token->revoke();
        }
        Auth::logout();

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
