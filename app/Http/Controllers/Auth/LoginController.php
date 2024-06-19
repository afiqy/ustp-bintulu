<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string|min:6',
        ]);
    }

    public function username()
    {
        return 'email'; // Assuming email is used for login
    }

    protected function attemptLogin(Request $request)
    {
        // Attempt to log the user in using the default guard
        $userLoggedIn = Auth::attempt($this->credentials($request));

        // If the user login attempt fails, attempt to log in using the admin guard
        if (!$userLoggedIn) {
            return Auth::guard('admin')->attempt($this->credentials($request));
        }

        return $userLoggedIn;
    }

    public function showProfile()
    {
        $user = Auth::user();

        if ($user) {
            return view('profil-pengguna', compact('user'));
        } else {
            return redirect()->route('login');
        }
    }
}
