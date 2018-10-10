<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function showUploadForm()
    {
        return view('upload/upload');
    }

    public function storeFile(request $request)
    {
        // return $request->all();

        if ($request->hasFile('file')) {

            foreach ($request->file as $file){
                $filename = $file->getClientOriginalName();
                $filename = $file->getClientOriginalName();
                $filesize = $file->getClientSize();
                $file->storeAs('public/upload', $filename);
    
                $fileModel = new File;
                $fileModel->name = $filename;
                $fileModel->size = $filesize;
                $fileModel->save();
            }
            return 'ok';
        }
        return $request->all();
    }

    public function getFile($filename)
    {
        return response()->download(Stortage_path('app/public/upload/'.$filename), null, [], null);
    }
}
