<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_sekolah',
        'id_jawatan',
        'id_sektor',
        'id_alamat',
        'user_image_src',
        'ic_number',
        'phone_number',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_detail_id', 'id');
    }
}
