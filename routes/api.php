<?php

use App\Http\Controllers\ArtikelApiController;
use App\Http\Controllers\GaleriApiController;
use App\Http\Controllers\KategoriApiController;
use App\Http\Controllers\MateriVideoApiController;
use App\Http\Controllers\PengepulApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// == Get Kategori ==
// Get All Kategori
Route::get('/kategori', [KategoriApiController::class, 'getAll']);
// Get One Kategori
Route::get('/kategori/{id}', [KategoriApiController::class, 'getOne']);


// == Get Materi Video ==
// Get All Materi Video
Route::get('/materivideo', [MateriVideoApiController::class, 'getAll']);
// Get One Materi Video
Route::get('/materivideo/{id}', [MateriVideoApiController::class, 'getOne']);


// == Get Artikel ==
// Get All Artikel
Route::get('/artikel', [ArtikelApiController::class, 'getAll']);
// Get One Artikel
Route::get('/artikel/{id}', [ArtikelApiController::class, 'getOne']);


// == Get Galeri ==
// Get All Galeri
Route::get('/galeri', [GaleriApiController::class, 'getAll']);
// Get One Galeri
Route::get('/galeri/{id}', [GaleriApiController::class, 'getOne']);

// == Get Pengepul ==
// Get All Pengepul
Route::get('/pengepul', [PengepulApiController::class, 'getAll']);
// Get One Pengepul
Route::get('/pengepul/{id}', [PengepulApiController::class, 'getOne']);
