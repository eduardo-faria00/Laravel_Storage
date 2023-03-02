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
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
        }
        return redirect('/dashboard');
    }

    public function download($filename)
    {
        $file_path = public_path('uploads/' . $filename);

        if (file_exists($file_path)) {
            return response()->download($file_path);
        } else {
            return redirect('/dashboard')->with('Erro', 'Arquivo não encontrado');
        }
    }

    public function destroy($filename)
    {
        $file_path = public_path('uploads/' . $filename);

        if (file_exists($file_path)) {
            unlink($file_path);
            return redirect('/dashboard')->with('msg', 'Excluido com sucesso');
        } else {
            return redirect('/dashboard')->with('msg', 'Arquivo não encontrado');
        }
    }
}
