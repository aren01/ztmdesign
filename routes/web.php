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

Route::get('/sample_design_A', function () {
    return view('');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/fatin-amin', function () {
    return view('card');
});

Route::get('/amin-fatin', function () {
    return view('card2');
});

Route::get('/sample_design_A', function () {
    return view('sample');
});
