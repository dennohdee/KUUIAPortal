<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Auth;

class ContactController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contact()
    {
        return view('contact');
        
    }
    public function store(Request $request)
    {
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $message = $request->input('message');
        $posted_by = Auth::user()->id;
        $newsletter = $request->input('newsletter') == 'on' ? true : false;

        //dd($newsletter);
        $contact = new Contact();

        $contact->name = $name;
        $contact->email = $email;
        $contact->message = $message;
        $contact->posted_by = $posted_by;
        $contact->newsletter = $newsletter;


        $contact->save();
        return redirect()->route('contact');
        }
        public function getContacts(){
        $contacts = Contact::all()->where('posted_by', \Auth::id()); 
        return view('contact',compact('contacts')); 
        }
       
}
