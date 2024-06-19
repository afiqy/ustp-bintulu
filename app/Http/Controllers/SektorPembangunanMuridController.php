<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SektorPembangunanMuridController extends Controller
{
    public function index()
    {
        return view('BigData.sektor-pembangunan-murid');
    }
}
