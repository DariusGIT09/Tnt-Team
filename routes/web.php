<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransformationController;
use App\Http\Controllers\ContactController;

Route::get('/', [\App\Http\Controllers\PageController::class, 'home'])->name('home');
Route::get('/about', [\App\Http\Controllers\PageController::class, 'about'])->name('about');

// Transformation Route
Route::get('/real-results', [TransformationController::class, 'index'])->name('transformations');

// New Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/protocol', [\App\Http\Controllers\PageController::class, 'protocol'])->name('protocol');
Route::get('/david', [\App\Http\Controllers\PageController::class, 'david'])->name('david');
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index']);
