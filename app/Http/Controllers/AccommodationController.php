<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function accommodation()
    {
        return view('accommodation');
    }
}
