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
        //return Storage::size('public/new_pic.png');
        // return Storage::lastModified('public/new_pic.png');
        // Storage::copy('public/new_pic.png', 'new_pic.png');
        if (Storage::move('public/new_pic.png', 'new_pic.png')) {
            return 'File moved';
        }
        
    }
}
