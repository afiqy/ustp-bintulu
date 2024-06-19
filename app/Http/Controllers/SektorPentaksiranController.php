<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SektorPentaksiranController extends Controller
{
    public function index()
    {
        return view('BigData.sektor-pentaksiran');
    }
}
