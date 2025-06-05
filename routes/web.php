<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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
    return view('/Pages/dashboard');
});
Route::get('/2', function () {
    return view('/Pages/dashboard_2');
});
Route::get('/2', function () {
    return view('dashboard_2');
});

Route::get('/index', function () {
    return view('/Pages/index');
});

Route::get('/tailwind', function () {
    return view('t/Pages/tailwind');
});
Route::get('/kategori', function () {
    return view('/Pages/kategori_prod');
});

Route::get('/nitip', function () {
    return view('/Pages/nitip');
});
Route::get('/produk', function () {
    return view('/Pages/produk');
});
Route::get('/kategori', function () {
    return view('kategori_prod');
});

Route::get('/nitip', function () {
    return view('nitip');
});
Route::get('/produk', function () {
    return view('produk');
});

// admin
Route::get('/Admin-dashboard', [AdminController::class, 'dashboardadmin']);    
Route::post('/tambahproduk', [AdminController::class, 'tambah_product']);
Route::get('/Admin-tambah_produk', [AdminController::class, 'tambahbarang']);



