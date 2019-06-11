<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Repository;

class AdminDelRepController extends Controller
{
    //
    public function repository()
    {
        //
        $repo = Repository::orderBy('id', 'DESC')->get();
        return view('admin-repository', compact('repo'));
    }
    public function destroy(Repository $rep)
    {
        $id = $rep->input('id');
        $repository = Repository::find($id);
               

        $repository->delete();
        return redirect()->route('admin.repository');
        //
    }
}
