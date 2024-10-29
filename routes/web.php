<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Home Page Route
Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');

// Menu Page Route
Route::get('/menu', [App\Http\Controllers\PageController::class, 'menu'])->name('menu');

// Contact Page Route
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');

Route::post('/contact', 'ContactController@submit')->name('contact.submit');