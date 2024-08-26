<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenyuplaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;

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
    return view('welcome');
});

Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/nyobaan',[HomeController::class, 'nyobaan'])->name('nyobaan');

Route::prefix('penyuplai')->name('penyuplai.')->group(function () {
    Route::get('/index',[PenyuplaiController::class, 'index'])->name('index');
    Route::get('/create',[PenyuplaiController::class, 'create'])->name('create');
    Route::post('/store',[PenyuplaiController::class, 'store'])->name('store');
    Route::get('edit/{id}',[PenyuplaiController::class, 'edit'])->name('edit'); //id digunakan sebagai parameter
    Route::put('update/{id}',[PenyuplaiController::class, 'update'])->name('update'); //route yang digunakan untuk mengupdate data berdasarkan id-nya,di form edit daya
    Route::delete('delete/{id}',[PenyuplaiController::class, 'delete'])->name('delete');
});

Route::prefix('pelanggan')->name('pelanggan.')->group(function () {
    Route::get('/index',[PelangganController::class, 'index'])->name('index');
    Route::get('/create',[PelangganController::class, 'create'])->name('create');
    Route::post('/store',[PelangganController::class, 'store'])->name('store');
    Route::get('edit/{id}',[PelangganController::class, 'edit'])->name('edit'); //id digunakan sebagai parameter
    Route::put('update/{id}',[PelangganController::class, 'update'])->name('update'); //route yang digunakan untuk mengupdate data berdasarkan id-nya,di form edit daya
    Route::delete('delete/{id}',[PelangganController::class, 'delete'])->name('delete');
});

Route::prefix('produk')-> name('produk.')->group(function () {
    Route::get('/index',[ProdukController::class, 'index'])->name('index');
    Route::get('/create',[ProdukController::class, 'create'])->name('create');
    Route::post('/store',[ProdukController::class, 'store'])->name('store');
    Route::get('edit/{id}',[ProdukController::class, 'edit'])->name('edit'); //id digunakan sebagai parameter
    Route::put('update/{id}',[ProdukController::class, 'update'])->name('update'); //route yang digunakan untuk mengupdate data berdasarkan id-nya,di form edit daya
    Route::delete('delete/{id}',[ProdukController::class, 'delete'])->name('delete');

});

Route::get('/pembelian',[PembelianController::class, 'pembelian'])->name('pembelian');
Route::get('/penjualan',[PenjualanController::class, 'penjualan'])->name('penjualan');
Route::get('/penjualan',[PenjualanController::class, 'penjualan'])->name('penjualan');



//Route mmeiliki fungsi yang berbeda berdasarkan kebutuhannya,untuk yang berada pada array,merupakan tamplilan di Controller-nya,untuk name digunakan agar memudahkan dalam memanggil untuk hlaman mana yang akan dituju
//Routing menentukan bagaimana URL yang diminta oleh pengguna dipetakan ke fungsi atau method tertentu dalam controller.
//Controller berisi method-method yang menjalankan logika aplikasi sesuai dengan permintaan pengguna yang dikirimkan melalui routing.//