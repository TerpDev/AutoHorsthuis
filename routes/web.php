<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/autoschade', function () {
    return view('autoschade');
})->name('autoschade');
Route::get('/spuiterij', function () {
    return view('spuiterij');
})->name('spuiterij');
Route::get('/banden-velgen', function () {
    return view('bandenenvelgen');
})->name('bandenenvelgen');
//Route::get('/contact', function () {
//    return view('contact');
//})->name('contact');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Form submit (POST)
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

