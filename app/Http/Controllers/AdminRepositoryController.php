<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Repository;

class AdminRepositoryController extends Controller
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
        return view('admin-repository');
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
            $fileNameToStore="NONE.docx";
        }
        $category = $request->input('category');
        $file = $fileNameToStore;
        $description = $request->input('description');
        $posted_by = Auth::user()->name;
        
        $repository = new Repository();

        $repository->category = $category;
        $repository->file = $file;
        $repository->description = $description;
        $repository->posted_by = $posted_by;
        
        $repository->save();
        return redirect()->route('admin.repository');
        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function repository()
    {
        //
        $repo = Repository::orderBy('id', 'DESC')->get();
        return view('admin-repository', compact('repo'));
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
    public function destroy(Request $request, $id)
    {
        //$id = $request->input('id');
        $repository = Repository::findOrFail($id);
 
        $repository->delete(); //DELETE OCCURS HERE AFTER RECORD FOUND
 
        \Session::flash('flash_message_delete','Repository successfully deleted.');
 
        return redirect()->route('admin.repository');
    }
}
