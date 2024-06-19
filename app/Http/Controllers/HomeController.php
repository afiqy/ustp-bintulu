<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $message = 'Anda sudah log masuk.';
        } else {
            $message = null; // No message if the user is not logged in
        }

        // Pass the message to the view
        return view('index', ['message' => $message]);
    }
}

