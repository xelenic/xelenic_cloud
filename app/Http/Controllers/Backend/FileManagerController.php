<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    public function index()
    {

    }

    public function upload_files(Request $request)
    {
        dd($request);
        $file = $request->file('fotografije');

        //Display File Name just for check or do a dd
       dd($file);


        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
    }
}
