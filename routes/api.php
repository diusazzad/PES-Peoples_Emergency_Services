<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PagesController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// test API
Route::apiResource('/products', ProductController::class);



// Login and Register
Route::post('login', [AuthController::class, 'login']);
Route::post('auth/register', [AuthController::class, 'register']);

// JWT Auth
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/logout', [AuthController::class, 'logout'])->middleware('auth:api');
Route::post('auth/refresh', [AuthController::class, 'refresh'])->middleware('auth:api');
Route::get('auth/me', [AuthController::class, 'me'])->middleware('auth:api');

// Web Content
Route::get('/welcome', [PagesController::class, 'welcome']);
