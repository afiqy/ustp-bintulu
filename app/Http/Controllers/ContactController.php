<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Send email
        Mail::to('ppdbintulu@moe.gov.my')->send(new ContactFormMail($validatedData));

        // Redirect back with success message
        return back()->with('success', 'Mesej anda telah berjaya dihantar!');
    }
}
