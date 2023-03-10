<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/showtimes', function () {
    return view('home.showtime');
})->name('showtime');

Route::get('/choose-chair', function () {
    return view('pos.choose_chair');
});
