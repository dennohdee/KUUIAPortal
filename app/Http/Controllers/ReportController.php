<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
class ReportController extends Controller
{
    //
    public function __construct() 
    { 
        $this->middleware('auth'); 
    } 
    public function report() 
    { 
        return view('report'); 
    }
    public function addSession(Request $request)
    {
        $ac = $request->input('ac');
        $sem = $request->input('sem');
        $user_id = $request->input('user_id');

        $report = new Report();
        $report->ac = $ac;
        $report->sem = $sem;
        $report->ac = $user_id;
        $report->save();
        return redirect()->route('sessionreporting');
    } 
}
