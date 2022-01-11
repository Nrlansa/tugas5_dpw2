<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Routing\RouteUrlGenerator;
use App\Http\Controllers\ProdukController;

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
    return view('welcome');
});

Route::get('', function(){
    return view('tamplate.base');
});

Route::get('/homepage', function(){
    return view('homepage');
});

Route::get('/Singleproduk', function(){
    return view('Singleproduk');
});


Route::get('Dashboard', [TestController::class, 'showDashboard']);
Route::get('pro', [ProdukController::class, 'index']);
Route::get('up', [UserController::class, 'index']);

Route::get('kat', [TestController::class, 'showkategori']);
Route::get('out', [TestController::class,'showlogout']);
Route::get('daftar', [TestController::class,'showdaftar']);


Route::resource('produk', ProdukController::class);
//Route::get('/produk/create', [ProdukController::class, 'create']);
//Route::Post('produk', [ProdukController::class, 'store']);
//Route::get('produk/{produk}',[ProdukController::class,'show']);
//Route::get('/{produk}/edit',[ProdukController::class,'edit']);
//Route::put('produk/{produk}',[ProdukController::class,'update']);
//Route::delete('produk/{produk}',[ProdukController::class,'destroy']);
Route::resource('user',UserController::class);


Route::get('login', [AuthController::class, 'showlogin'])->name('login');
Route::post('login', [AuthController::class, 'LoginProcess']);
Route::get('logout', [AuthController::class, 'Logout']);
