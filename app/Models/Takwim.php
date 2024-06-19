<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Takwim extends Model
{
    use HasFactory;

    protected $table = 'takwim';

    protected $fillable = ['title', 'start_date'];
}
