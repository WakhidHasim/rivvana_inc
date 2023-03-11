<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, AboutController, PortfolioController, DetailPortfolioController, ContactController, LoginController};
use App\Http\Controllers\Admin\{DashboardController, CategoryController, ProfileController, ServiceController, PortfolioController as AdminPortfolioController};

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/portfolios', PortfolioController::class)->name('portfolios');
Route::get('/portfolios/{slug}', DetailPortfolioController::class)->name('details');
Route::get('/contact', ContactController::class)->name('contact');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        Route::resources([
            'profiles' => ProfileController::class,
            'services' => ServiceController::class,
            'portfolios' => AdminPortfolioController::class
        ]);
    });
