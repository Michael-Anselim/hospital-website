<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('welcome');

Route::get('/gallery',  function () {
    return view('gallery');
})->name('gallery');

Route::get('/services',  function () {
    return view('services');
})->name('services');

Route::get('/whoweare',  function () {
    return view('who-we-are');
})->name('whoweare');

Route::get('/missionandvision',  function () {
    return view('mission-vision');
})->name('missionandvision');

Route::get('/joinus',  function () {
    return view('join-us');
})->name('joinus');

Route::get('/projects',  function () {
    return view('projects');
})->name('projects');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');
