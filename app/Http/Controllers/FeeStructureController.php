<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeStructureController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function feestructure()
    {
        return view('feestructure');
    }
}
