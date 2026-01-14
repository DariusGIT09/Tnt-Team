<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransformationController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Transformation Route
Route::get('/real-results', [TransformationController::class, 'index'])->name('transformations');

// New Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::view('/protocol', 'protocol')->name('protocol');
Route::view('/david', 'david')->name('david');
