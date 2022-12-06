<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadController;

Route::get('/upload', [UploadController::class, 'index'])->name("upload");
Route::post('/upload', [UploadController::class, 'store'])->name('file.store');

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/gallery', function () {
    return view('galleries');
})->name("galleries");
