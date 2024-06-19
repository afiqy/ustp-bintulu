<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SektorPerancanganController extends Controller
{
    public function index()
    {
        return view('BigData.sektor-perancangan');
    }
}
