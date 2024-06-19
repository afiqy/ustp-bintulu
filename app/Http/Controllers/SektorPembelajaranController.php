<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SektorPembelajaranController extends Controller
{
    public function index()
    {
        return view('BigData.sektor-pembelajaran');
    }
}

