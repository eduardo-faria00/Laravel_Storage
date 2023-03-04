<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Component;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function create()
    {
        return view('livewire.files.add-file');
    }
}
