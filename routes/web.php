<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\FileDislikeController;
use App\Http\Controllers\FileLikeController;
use Illuminate\Support\Facades\Route;

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
    return redirect('dashboard');
});

Route::get('/dashboard', [FileController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/file/create', [FileController::class, 'create'])->name('file.create')->middleware('auth');
Route::get('/files/download/{filename}', [FileController::class, 'download'])->middleware('auth');
Route::delete('/files/{id}', [FileController::class, 'destroy'])->middleware('auth');
Route::post('/files', [FileController::class, 'store'])->name('file.store')->middleware('auth');
Route::post('/files/{file}/like', [FileLikeController::class])->name('file.like')->middleware('auth');
Route::post('/files/{file}/dislike', [FileDislikeController::class])->name('file.dislike')->middleware('auth');
