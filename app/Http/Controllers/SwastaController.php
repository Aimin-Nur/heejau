<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwastaController extends Controller
{
    public function index()
    {
        return view('swasta.home');
    }
}
