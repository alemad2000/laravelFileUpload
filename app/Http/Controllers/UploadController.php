<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload.upload');
    }

    public function store(request $request)
    {
        if($request->hasFile('image')){
            $request->file('image');
            return $request->image->storeAs('public', 'new_pic.png');
            // return $request->image->extension();
            // return Storage::putFile('public/new', $request->file('image'));
        }else{
            return 'No file selected';
        }
    }

    public function show()
    {
        /* 
        $rawContent = Storage::get('new_pic.png');
        if (Storage::put('newImage.png', $rawContent)) {
            return 'File was created';
        }
        */
        if (Storage::delete('newImage.png')) {
            return 'File is delete';
        }
    }
}
