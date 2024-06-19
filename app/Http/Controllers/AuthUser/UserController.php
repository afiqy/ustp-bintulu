<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use App\Models\User;

class UserController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard.index');
    }

    public function index(){
        $user = Auth::user();
        return view('admin.pages.user_profile', compact('user'));
    }

    public function saveUserProfile(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'phone_number' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ],[
            'name.required' => '\'Name\' Field is required!',
            'name.max' => '\'Name\' Field has exceeded the maximum allotted characters!',
            'email.required' => '\'Email\' Field is required!',
            'email.email' => 'Please enter a valid email address!',
            'email.max' => '\'Email\' Field has exceeded the maximum allotted characters!',
            'email.unique' => 'This email address is already registered!',
            'phone_number.required' => '\'Phone Number\' Field is required!',
            'phone_number.max' => '\'Phone Number\' Field has exceeded the maximum allotted characters!',
            'phone_number.unique' => 'This phone number is already registered!',
            'password.required' => '\'Password\' Field is required!',
            'password.min' => '\'Password\' must be at least 8 characters long!',
            'password.confirmed' => 'The password confirmation does not match!',
        ]);
    
        // If validation fails, Laravel will automatically redirect back with error messages
        // and the code below won't be executed
        $user = User::find($request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password)
        ]);
    
        return redirect()->route('user-profile')->with('success', 'Your profile has been updated successfully!');
    }
    
}
