<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

/**
 * Guest
 */
Route::get('/', function () {
    return view('index');
})->name('welcome');

Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');


require(__DIR__ . '/auth.php');