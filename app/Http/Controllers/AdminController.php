<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Repository;
use App\User;
use App\Admin;
use App\Contact;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('admin');
    }
    public function help()
    {
        //
        return view('admin-help');
    }
    public function sessionreporting()
    {
        return view('admin-sessionreporting');
    }
    public function report()
    {
        return view('admin-report');
    }
    public function storecontact(Request $request)
    {
        $iod = "1";
        $id = Contact::find($iod);
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $reply = $request->input('message');
        $replier = Auth::user()->id;
        $newsletter = $request->input('newsletter') == 'on' ? true : false;

        //dd($newsletter);
        $contact = new Contact();

        $contact->name = $name;
        $contact->email = $email;
        $contact->reply = $reply;
        $contact->replier = $replier;
        $contact->newsletter = $newsletter;


        $contact->update();
        return redirect()->route('admin.contact');
        }
    public function contact()
    {
        $contacts = Contact::all(); 
        return view('admin-contact',compact('contacts'));
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
