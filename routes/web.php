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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/tailwind', function () {
    return view('tailwind');
});
Route::get('/kategori', function () {
    return view('kategori_prod');
});


