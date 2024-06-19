<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'admin_role', 'admin_id', 'role_id');
    }

    public function assign(Roles $role)
    {
        $this->roles()->syncWithoutDetaching([$role->id]);
    }
}
