<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImageController;

Route::get('/image/upload', [ImageController::class, 'create'])->name('image.create');
Route::post('/image/upload', [ImageController::class, 'store'])->name('image.store');
Route::get('/image/{filename}', [ImageController::class, 'show'])->name('image.show');
Route::get('/images', [ImageController::class, 'index'])->name('image.index');


Route::get('/', function () {
    return view('welcome');
});
