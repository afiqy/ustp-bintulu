<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'password' => 'required|string|confirmed',
            'username' => 'required|string|max:255',
        ]);

        Auth::login($user = User::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email, 
            'password' => Hash::make($request->password),
            'is_active' => true,
            'user_type' => 'agent',
        ]));

        event(new Registered($user));

        // Auth::login($user);

        return redirect()->route('home');
    }
}
