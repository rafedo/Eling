<?php

use App\Http\Controllers\KategoriApiController;
use App\Http\Controllers\ArtikelApiController;
use App\Http\Controllers\MateriApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('kategori', KategoriApiController::class);  //Mengatur api kategori
Route::apiResource('artikel', ArtikelApiController::class);    //Mengatur api artikel
Route::apiResource('materi', MateriApiController::class);      //Mengatur api materi