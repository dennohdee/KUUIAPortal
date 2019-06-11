<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeestatusController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function feestatus()
    {
        return view('feestatus');
    }
}
