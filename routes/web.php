<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'contact'])->name('contact.submit');
