<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:isAdmin'); // Assuming you have an isAdmin gate defined
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
        } else {
            return redirect()->route('admin.users')->with('error', 'User not found.');
        }
    }
}
