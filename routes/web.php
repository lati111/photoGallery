<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\GalleryController;

Route::get('/upload', [UploadController::class, 'index'])->name("upload");
Route::post('/upload', [UploadController::class, 'store'])->name('file.store');

Route::get('/gallery', [GalleriesController::class, "show"])->name("galleries");
Route::get('/gallery/{category}', [GalleryController::class, "show"])->name("gallery");

Route::get('/', function () {
    return view('home');
})->name("home");
