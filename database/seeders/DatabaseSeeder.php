<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed the users table with sample data
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone_number' => '123456789',
            'password' => Hash::make('password'), // Hash the password
        ]);
        
        // Uncomment the line below to seed additional users using the factory
        // User::factory(10)->create();
    }
}
