<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'email_ends_with'],
            'phone_number' => ['required', 'string', 'max:20'],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'password_contains_number'],
            'jawatan' => ['required', 'string', 'max:255', 'in:ADMIN,user,other'], // Example roles
            'sektor' => ['required', 'string'],
        ], [
            'name.required' => __('messages.Please enter your name.'),
            'email.required' => __('messages.Please enter your email address.'),
            'email.email' => __('messages.Your email address must be in the correct format.'),
            'email.unique' => __('messages.This email address is already registered.'),
            'email.email_ends_with' => __('messages.Alamat emel mesti diakhiri dengan @moe.gov.my atau mohammadfarishussain10@gmail.com'),
            'phone_number.required' => __('messages.Please enter your phone number.'),
            'password.required' => __('messages.Please enter a password.'),
            'password.min' => __('messages.Your password must be at least 8 characters long.'),
            'password.confirmed' => __('messages.Your password confirmation does not match.'),
            'password.password_contains_number' => __('messages.Kata laluan mesti mengandungi sekurang-kurangnya satu nombor.'),
            'jawatan.required' => __('messages.Please enter your job title.'),
            'jawatan.in' => __('messages.Invalid job title.'),
            'sektor.required' => __('messages.Please enter your sector.'),
            
        ])->after(function ($validator) use ($data) {
            // Custom validation for specific emails with ADMIN role
            if (isset($data['jawatan']) && $data['jawatan'] === 'ADMIN') {
                $allowedEmails = [
                    'mohammadfarishussain10@gmail.com',
                    'evelyn.eba@moe.gov.my',
                    'ismailhassan88@moe.gov.my',
                    'samrisuhaili@moe.gov.my'
                ];
                if (!in_array($data['email'], $allowedEmails)) {
                    $validator->errors()->add('email',  __('messages.Alamat e-mel ini tidak dibenarkan mempunyai peranan ADMIN.'));
                }
            }
        });
    }


    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password']),
            'jawatan' => $data['jawatan'],
            'sektor' => $data['sektor'],
        ]);

        // Send verification email
        $user->sendEmailVerificationNotification();

        return $user;
    }

    protected function registered(Request $request, $user)
    {
        $user->sendEmailVerificationNotification();
        return redirect()->route('verification.notice');
    }
}
