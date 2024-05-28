<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function() {
    Route::post('register', 'register');
    Route::post('login', 'login');

    Route::get('user', 'userProfile')->middleware('auth:sanctum');
    Route::get('logout', 'userLogout')->middleware('auth:sanctum');
});
