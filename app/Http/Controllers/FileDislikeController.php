<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;

class FileDislikeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Files $file)
    {
        $file->dislike();
        return redirect()->back();
    }
}
