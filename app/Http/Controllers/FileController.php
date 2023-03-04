<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{

    public function index()
    {
        $files = Files::all();

        // $publicPath = public_path('/uploads');

        // $files = File::files($publicPath);

        // $filenames = array_map(function ($file) {
        //     return $file->getFilename();
        // }, $files);

        return view('dashboard', [
            'files' => $files
        ]);
    }

    public function create()
    {
        return view('livewire.files.add-file');
    }

    public function store(Request $request)
    {
        $file_name = $request->file('file')->getClientOriginalName();

        $file = new Files;
        $file->name = $file_name;
        $file->uploaded_by = Auth::user()->name;
        $file->user_id = Auth::user()->id;

        $file->save();

        $request->file('file')->move(public_path('uploads'), $file_name);

        return redirect('/dashboard')->banner('Arquivo adicionado com sucesso');
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

    public function destroy($id)
    {
        $file = Files::findOrFail($id);
        $file_path = public_path('uploads/' . $file->name);

        if (file_exists($file_path)) {
            unlink($file_path);
            $file->delete();
            return redirect('/dashboard')->with('msg', 'Excluido com sucesso');
        } else {
            return redirect('/dashboard')->with('msg', 'Arquivo não encontrado');
        }
    }
}
