<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\KategoriApiController;
use App\Http\Controllers\ArtikelApiController;
use App\Http\Controllers\MateriApiController;
use App\Http\Controllers\PengepulApiController;
use App\Http\Controllers\GaleriController;
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

// Mengatur api user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Mengatur api register
Route::post('register', [AuthController::class, 'register']);

// Mengatur api login
Route::post('login', [AuthController::class, 'login']);

Route::apiResource('kategori', KategoriApiController::class);  //Mengatur api kategori
Route::apiResource('artikel', ArtikelApiController::class);    //Mengatur api artikel
Route::apiResource('materi', MateriApiController::class);      //Mengatur api materi
Route::apiResource('pengepul', PengepulApiController::class);  //Mengatur api pengepul
Route::apiResource('galeri', GaleriController::class);         //Mengatur api galer