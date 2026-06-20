<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->withoutMiddleware([
        // memastikan tidak ada redirect format web yang terjadi
    ]);
    Route::get('/me', [AuthController::class, 'me'])->withoutMiddleware([
        // memastikan tidak ada redirect format web yang terjadi
    ]);
});
