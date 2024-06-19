<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Models
use App\Models\Admin;
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
        $admin = Admin::firstOrCreate([
            'name' => 'Admin',
            'email' => 'adminuser@ustpbintulu.com',
            'password' => Hash::make('ustpbtuadmin'),

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
