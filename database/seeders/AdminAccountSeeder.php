<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Models
use App\Models\User;
use App\Models\Roles;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::firstOrCreate([
            'first_name' => 'Admin',
            'email' => 'admin@ustpbintulu.com',
            'username' => 'admin',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('admin123456789')
        ]);

        $data = [
            [
                'name' => 'admin',
                'title'=> 'Admin'
            ],
            [
                'name' => 'user',
                'title'=> 'User'
            ],
            [
                'name' => 'author',
                'title'=> 'Author'
            ],
        ];
        foreach($data as $role){
            $roles = Roles::firstOrCreate($role);
        }
        //get admin role
        $adminRole = Roles::where('name', 'admin')->first();
        //update to admin id
        $admin->update(['role_id'=> $adminRole->id]);
        $admin->save();
        //assign admin role to admin for assign role table
        $admin->assign($adminRole);
    }
}
