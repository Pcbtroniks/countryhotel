<?php

use App\Http\Controllers\Front\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home.home');
})->name('home');

Route::get('/habitaciones', function () {
    return view('front.rooms.rooms');
})->name('rooms');

Route::get('/instalaciones', function () {
    return view('front.installations.installations');
})->name('installations');

Route::get('/servicios', function () {
    return view('front.services.services');
})->name('services');

Route::get('/visita-guadalajara', function () {
    return view('front.visit.visit');
})->name('visit');

Route::get('/contacto', function () {
    return view('front.contact.contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'sendMail'])->name('sendMail');

Route::get('redirectBooking', function () {
    return redirect('https://hotels.cloudbeds.com/reservation/bBd28o');
})->name('redirectBooking');