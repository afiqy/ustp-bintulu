<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user(); // Get the authenticated user

        if ($user) {
            if (Auth::guard('admin')->check()) {
                // If the authenticated user is an admin
                return view('auth.profile-pengguna', ['user' => $user]);
            } else {
                // If the authenticated user is a regular user
                return view('auth.profile-pengguna', ['user' => $user]);
            }
        } else {
            // Redirect to login if user is not authenticated
            return redirect()->route('login');
        }
    }
}
