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

Route::get('/dashboard', [FileController::class, 'index'])->middleware('auth');
// Route::get('/files', [FileController::class, 'index'])->middleware('auth');
Route::post('/files', [FileController::class, 'store'])->middleware('auth');
Route::get('/files/add', [FileController::class, 'addFile'])->middleware('auth');
Route::get('/files/download/{filename}', [FileController::class, 'download'])->middleware('auth');
Route::delete('/files/{filename}', [FileController::class, 'destroy'])->middleware('auth');
