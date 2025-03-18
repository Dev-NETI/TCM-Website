<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Route::get('/affiliated-companies', [HomeController::class, 'affiliated_company'])->name('affiliated.company');

