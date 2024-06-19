<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SektorPsikologiController extends Controller
{
    public function index()
    {
        return view('BigData.sektor-psikologi');
    }
}
