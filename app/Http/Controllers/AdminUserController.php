<?php
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\User; 
use Auth;

 
class AdminUserController extends Controller 
{ 
    // 
    public function __construct() 
    { 
        $this->middleware('auth:admin'); 
    } 
    public function users() 
    { 
        return view('admin-users'); 
    } 
    //diplay users
    public function getUsers() 
    { 

        $users = User::all(); 
        return view('admin-users',compact('users')); 
    } 
    public function getMe() 
    { 

        $users = User::all()->where('id', \Auth::id()); 
        return view('admin-profile',compact('users')); 
    } 
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->password = bcrypt($request->input('password'));
        //$user->email = $request->input('email');
        
        $user->update();
	    return redirect('admin.profile'); 
    }
}



