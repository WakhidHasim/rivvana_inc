<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/portfolios', PortfolioController::class)->name('portfolios');
Route::get('/contact', ContactController::class)->name('contact');


Route::get('/portfolio-detail', function () {
    return view('pages.portfolio-detail');
});

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
});
