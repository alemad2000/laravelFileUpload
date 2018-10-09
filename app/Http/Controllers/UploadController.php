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
            // return $request->image->extension();
            return Storage::putFile('public', $request->file('image'));
        }else{
            return 'No file selected';
        }
    }
}
