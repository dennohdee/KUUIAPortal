<?php
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\User; 
use Auth;
 
class UsersController extends Controller 
{ 
    // 
    public function __construct() 
    { 
        $this->middleware('auth'); 
    } 
    public function users() 
    { 
        return view('users'); 
    } 
    //diplay users
    public function getUsers() 
    { 

        $users = User::all(); 
        return view('users',compact('users')); 
    } 
    public function getMe() 
    { 

        $users = User::all()->where('id', \Auth::id()); 
        return view('profile',compact('users')); 
    } 
    public function update(Request $request)
    {
        //handle File Upload
        if($request->hasFile('file')){
            //get filename and ext
            $fileNameWithExt = $request->file('file')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //get Just EXT
            $extension = $request->file('file')->getClientOriginalExtension();
            //fileNameToStore
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload
            $path = $request->file('file')->storeAs('public/files', $fileNameToStore);
        }
        else{
            $fileNameToStore="noimage.jpg";
        }
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->password = bcrypt($request->input('password'));
        $user->file = $fileNameToStore;
        $user->email = $request->input('email');
        
        $user->update();
	    return redirect('/profile'); 
    }
}



