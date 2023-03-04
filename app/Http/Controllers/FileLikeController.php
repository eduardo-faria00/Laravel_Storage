<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;

class FileLikeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Files $file)
    {
        $file->like();
        return redirect('dashboard');
    }
}
