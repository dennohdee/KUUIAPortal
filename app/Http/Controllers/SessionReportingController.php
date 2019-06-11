<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionReportingController extends Controller
{
    //a
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function sessionreporting()
    {
        return view('sessionreporting');
    }
}
