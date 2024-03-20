<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Log; // Import the Log facade
use Illuminate\Support\Facades\Hash; // For hashing passwords
use App\Http\Controllers\Controller; // Base controller class
use App\Models\User; // User model for creating new users
use Illuminate\Support\Facades\Validator; // For data validation
use Illuminate\Foundation\Auth\RegistersUsers; // Trait providing user registration methods
use Illuminate\Http\Request; // For handling HTTP requests
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as RouteServiceProvider;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'confirmed'],
            'jawatan' => ['required', 'string', 'max:255'], // Validation rules for jawatan
            'sektor' => ['required', 'string', 'max:255'],  // Validation rules for sektor
        ]);
    }
    
    protected function create(array $data)
    {
        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'password' => Hash::make($data['password']),
                'jawatan' => $data['jawatan'], // Add jawatan field
                'sektor' => $data['sektor'],   // Add sektor field
            ]);

            // Log success message
            Log::info('User registered successfully.');

            return $user;
        } catch (\Exception $e) {
            // Log error message
            Log::error('Error registering user: ' . $e->getMessage());

            return false;
        }
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        if ($user) {
            $this->guard()->login($user);

            return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
        } else {
            return redirect()->back()->withInput()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }
}
