<?php

use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
    Route::post('logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
});

Route::group(['middleware' => 'auth:sanctum'], function (){
    Route::apiResource('categories', \App\Http\Controllers\Api\CategoryController::class);
    Route::apiResource('transactions', \App\Http\Controllers\Api\TransactionController::class);
});