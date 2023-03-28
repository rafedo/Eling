<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MateriController;
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

// Route::prefix('v2')->group(function () {
    Route::apiResource('article', ArtikelController::class);
    Route::apiResource('material', MateriController::class);
// });
