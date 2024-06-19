<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register custom validation rules
        $this->registerCustomValidationRules();

        // Define isAdmin gate
        Gate::define('isAdmin', function ($user) {
            return $user->jawatan === 'ADMIN';
        });
    }

    /**
     * Register custom validation rules.
     *
     * @return void
     */
    protected function registerCustomValidationRules()
    {
        // Custom validation rule for email ending with '@moe.gov.my'
        Validator::extend('email_ends_with', function ($attribute, $value, $parameters, $validator) {
            if ($value === 'mohammadfarishussain10@gmail.com') {
                return true; // Allow the specific Gmail account
            }

            $endsWith = '@moe.gov.my';
            return str_ends_with($value, $endsWith);
        });

        // Custom validation message replacer for 'email_ends_with'
        Validator::replacer('email_ends_with', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':email', $attribute, 'Alamat emel :email mesti diakhiri dengan @moe.gov.my.');
        });

        // Custom validation rule for password containing at least one number
        Validator::extend('password_contains_number', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/\d/', $value);
        });

        // Custom validation message replacer for 'password_contains_number'
        Validator::replacer('password_contains_number', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'Kata laluan mesti mengandungi sekurang-kurangnya satu nombor.');
        });
    }
}
