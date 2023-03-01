<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
    public function index()
    {
        $publicPath = public_path('/uploads');

        $files = File::files($publicPath);

        $filenames = array_map(function ($file) {
            return $file->getFilename();
        }, $files);

        return view('filesList', [
            'files' => $filenames
        ]);
    }

    public function addFile()
    {
        return view('addFile');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->extension();
            $filename = $file->getClientOriginalName() . strtotime('now');
            $file->move(public_path('uploads'), $filename);
        }
        return redirect('/files');
    }
}
