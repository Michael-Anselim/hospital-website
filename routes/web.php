<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('welcome');

Route::get('/work with us',  function () {
    return view('gallery');
})->name('gallery');

Route::get('/services',  function () {
    return view('services');
})->name('services');

Route::get('/about',  function () {
    return view('about');
})->name('about');

Route::get('/volunteer',  function () {
    return view('volunteer');
})->name('volunteer');

Route::get('/donate',  function () {
    return view('donate');
})->name('donate');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');
