<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'contact'])->name('contact.submit');
// Route::get('/affiliated-companies', [HomeController::class, 'affiliated_company'])->name('affiliated.company');
