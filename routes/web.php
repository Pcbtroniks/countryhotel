<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home.home');
})->name('home');

Route::get('/visita-guadalajara', function () {
    return view('front.visit.visit');
})->name('visit');
