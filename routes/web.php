<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\DashboardGaleriController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardKategoriController;
use App\Http\Controllers\DashboardPengepulController;
use App\Http\Controllers\DashboardMateriVideoController;

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

Route::get('/', [LandingpageController::class, 'index']);

// Auth
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/kategori', DashboardKategoriController::class);
    Route::resource('/materivideo', DashboardMateriVideoController::class);
    Route::resource('/artikel', DashboardArtikelController::class);
    Route::resource('/galeri', DashboardGaleriController::class);
    Route::get('/gallery/pengepul/{id}', [DashboardGaleriController::class, 'pengepul']);
    Route::get('/galeri/create/{id}', [DashboardGaleriController::class, 'create']);
    Route::post('/galeri/store/{id}', [DashboardGaleriController::class, 'store']);
    Route::resource('/pengepul', DashboardPengepulController::class);
});
