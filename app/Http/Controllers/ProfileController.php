<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;

class ProfileController extends Controller
{
    //not used
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        return view('profile');
    }
    public function getProfiles(){
        $users= User::all()->where('id', \Auth::id());
        return view('profile',compact('users')); 
        }
    public function update(Request $request, User $users)
    {
        $users->password = $request->password;
	    	$users->save();
	    	return redirect('/'); 
    }
}
