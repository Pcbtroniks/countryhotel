<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home.home');
})->name('home');

Route::get('/habitaciones', function () {
    return view('front.rooms.rooms');
})->name('rooms');

Route::get('/visita-guadalajara', function () {
    return view('front.visit.visit');
})->name('visit');
