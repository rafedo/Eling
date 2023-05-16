<?php

use App\Http\Controllers\DashboardArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardKategoriController;
use App\Http\Controllers\DashboardMateriVideoController;
use App\Http\Controllers\DashboardPengepulController;
use App\Http\Controllers\LandingpageController;

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

// Login
Route::get('/login', [LoginController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('/dashboard/kategori', DashboardKategoriController::class);
Route::resource('/dashboard/materivideo', DashboardMateriVideoController::class);
Route::resource('/dashboard/artikel', DashboardArtikelController::class);
Route::resource('/dashboard/pengepul', DashboardPengepulController::class);




