<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendars;
use Auth;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() 
    { 
        $this->middleware('auth:admin'); 
    } 
    public function index()
    {
        $events = [];
                $data = Calendars::all();
                if($data->count()) {
                    foreach ($data as $key => $value) {
                        $events[] = Calendar::event(
                            $value->event,
                            true,
                            new \DateTime($value->time),
                            new \DateTime($value->time.' +1 day'),
                            null,
                            // Add color and link on event
                         [
                             'color' => '#00a65a',
                             'url' => $value->description."/".$value->venue,
                         ]
                        );
                    }
                }
                $calendar = Calendar::addEvents($events);
                return view('admin-calendar', compact('calendar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $time = $request->input('date') . $request->input('time');
        $venue = $request->input('venue');
        $description = $request->input('description');
        $event = $request->input('event');
        $email = Auth::user()->email;
        
        $eves = new Calendars();

        $eves->time = $time;
        $eves->venue = $venue;
        $eves->description = $description;
        $eves->event = $event;
        $eves->email = $email;
        
        $eves->save();
        return redirect()->route('admin.events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
