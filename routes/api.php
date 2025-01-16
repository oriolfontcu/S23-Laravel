<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthMiddleware;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('/band', BandController::class)->middleware(AuthMiddleware::class);
Route::apiResource('/concert', ConcertController::class)->middleware(AuthMiddleware::class);
