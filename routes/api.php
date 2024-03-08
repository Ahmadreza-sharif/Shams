<?php

use App\Http\Controllers\v1\AuthController;
use App\Http\Controllers\v1\TestController;
use App\Http\Controllers\v1\UserController;
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


Route::group(['prefix' => 'auth', 'excluded_middleware' => 'auth:api'], function () {
    Route::post('/request', [AuthController::class, 'request']);
    Route::post('/login-otp', [AuthController::class, 'loginOtp']);
    Route::post('/login-password', [AuthController::class, 'loginPassword']);
});

Route::group(['prefix' => 'test', 'excluded_middleware' => 'auth:api'], function () {
    Route::post('/', [TestController::class, 'index']);
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('user', UserController::class);
    Route::get('/auth/logout', [AuthController::class, 'logout'])->middleware(['auth:api']);
});
