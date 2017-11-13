<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showdataform()

    {

    	return view('upload');

    }
    public function storefile(request $request)
    {
    	if ($request->hasFile('file'))
    	{
    		$filename= $request->file->getClientOriginalName();
    		$filesize= $request->file->getClientSize();

    		 $request->file->storeAs('public/upload',$filename);
    		 $file=new Data;
    		 $file->name=$filename;
    		 $file->size=$filesize;
    		 $file->save();
    		return 'Uploaded';
    	}
    	return $request->all();
    }

}