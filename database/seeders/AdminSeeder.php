<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'admin@moe.gov.my',
            'password' => Hash::make('adminustpbtu123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

