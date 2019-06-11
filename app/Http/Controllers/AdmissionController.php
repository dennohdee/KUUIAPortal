<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admission()
    {
        return view('admission');
    }
}
