<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [FileController::class, 'index'])->name('files');
});

Route::get('/files', [FileController::class, 'index']);
Route::post('/files', [FileController::class, 'store']);
Route::get('/files/add', [FileController::class, 'addFile']);
