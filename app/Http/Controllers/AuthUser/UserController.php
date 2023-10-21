<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

//Model
use App\Models\User;
use App\Models\UserDetail;

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
            'id' => 'required',
            'email' => 'required|email',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'username' => 'required|max:255',
        ],[
            'first_name.required' => '\'First Name\' Field is required!',
            'first_name.max' => '\'First Name\' Field has exceed the maximum alloted character!',
            'last_name.required' => '\'Last Name\' Field is required!',
            'last_name.max' => '\'Last Name\' Field has exceed the maximum alloted character!',
            'username.required' => '\'Username\' Field is required!',
            'username.max' => '\'Username\' Field has exceed the maximum alloted character!',
        ]);

        if($validate){
            $user=User::where('id', $request->id)->first();
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username
            ]);
        }

        return redirect()->route('user-profile')->with('success', 'Successfully update your profile!');
    }
}
