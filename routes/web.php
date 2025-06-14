<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('/tambahproduk', [AdminController::class, 'tambahbarang']);

Route::get('/', [HomeController::class, 'index'])->name('home');

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


// PAGES
Route::get('/aboutus', [HomeController::class, 'aboutus']);
Route::get('/detailproduk/{name}', [HomeController::class, 'detailproduk'])->name('detailproduk.show');
Route::get('/produkdetail/{name}', [HomeController::class, 'showproduct'])->name('produkdetail.show');
Route::get('/kategori/{name}', [HomeController::class, 'show'])->name('kategori.show');


// ADMIN
// BACA PENTING!
// kalau mau ngakses router ini jangan lupa tambahkan /admin/
// jangan lupa login terlebih dahulu. kalau tidak login maka akan diredirect ke halaman login
// cara agar bisa login dengan masuk ke url http://localhost/login

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboardadmin', [AdminController::class, 'dashboardadmin'])->name('dashboardadmin');
    Route::post('/tambahproduk', [AdminController::class, 'kirim_produk']);
    Route::get('/tambahproduk', [AdminController::class, 'tambahbarang']);
    Route::post('/tambahkategori', [AdminController::class, 'kirim_kategori']);
    Route::get('/tambahkategori', [AdminController::class, 'tambahkategori']);
    Route::get('/editproduk', [AdminController::class, 'editproducts']);
    Route::get('/filter-products/{category_id?}', [AdminController::class, 'filterProducts']);
    Route::post('/delete-products', [AdminController::class, 'deleteProducts']);
    Route::get('/produkeditdetail/{id}', [AdminController::class, 'showeditproduct'])->name('produkeditdetail.show');
    Route::put('/editproduk/{id_product}', [AdminController::class, 'update'])->name('product.update');
});

//AUTH
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');
