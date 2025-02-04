<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::group(['middleware' => ['auth']], function () {
    // Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('kategori', KategoriController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('produk', ProdukController::class);
// });

