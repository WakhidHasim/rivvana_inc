<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/portfolio-detail', function () {
    return view('pages.portfolio-detail');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
});
