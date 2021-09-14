<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductAdminController;

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

Route::get('/', function () {
    return redirect('/product');
});

Route::get('login', [AuthController::class, 'showLoginCustomer'])->name('login');
Route::get('register', [AuthController::class, 'showRegisterCustomer']);
Route::post('login', [AuthController::class, 'loginCustomer']);
Route::post('register', [AuthController::class, 'registerCustomer']);
Route::get('logout', [AuthController::class, 'logout']);

Route::prefix('admin')->group(function() {
    Route::get('login', [AuthController::class, 'showLoginAdmin']);
    Route::get('register', [AuthController::class, 'showRegisterAdmin']);
    Route::post('login', [AuthController::class, 'loginAdmin']);
    Route::post('register', [AuthController::class, 'registerAdmin']);
});

Route::prefix('admin')->group(function() {
    Route::group(['middleware' => 'admin'], function() {
        Route::get('/', [AdminController::class, 'index']);

        Route::prefix('product')->group(function() {
            Route::get('/', [ProductAdminController::class, 'index']);
            Route::get('tambah', [ProductAdminController::class, 'tambah']);
            Route::post('tambah', [ProductAdminController::class, 'create']);
            Route::get('tambah-kategori', [ProductAdminController::class, 'tambahKategori']);
            Route::post('tambah-kategori', [ProductAdminController::class, 'createKategori']);
            Route::get('/hapus/{product_id}', [ProductAdminController::class, 'delete']);
        });
    });
});

Route::prefix('product')->group(function() {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('add/{product_id}', [ProductController::class, 'add']);
    Route::get('cart', [ProductController::class, 'cart']);
    Route::get('deletecart', [ProductController::class, 'deletecart']);
    
    Route::group(['middleware' => 'customer'], function(){
        Route::get('history', [ProductController::class, 'history']);
        Route::get('checkout', [ProductController::class, 'checkout']);
        Route::get('summary/INV/{kode_transaksi}', [ProductController::class, 'summary']);
    });

    Route::get('{product_id}', [ProductController::class, 'show']);
});