<?php

use App\Http\Controllers\RedisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;

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

//Route::middleware('auth:sanctum')->get('/user/profile', function (Request $request) {
//    return $request->user();
//});
Route::group(['prefix' => 'v1'], function() {
    Route::get('user/profile', [UserController::class, 'profile'])->middleware('auth:sanctum');

    Route::post('auth/register', [UserAuthController::class, 'register']);
    Route::post('auth/login', [UserAuthController::class, 'login']);
    Route::post('auth/logout', [UserAuthController::class, 'logout'])->middleware('auth:sanctum');


    Route::post('redis/test/ping', [RedisController::class, 'ping']);
    Route::post('redis/test/ttl', [RedisController::class, 'test_ttl']);
    Route::group(['prefix' => 'guest'], function() {
        Route::post('redis/content/expire', [\App\Http\Controllers\GuestPagesController::class, 'expireContent']);
        Route::post('redis/content/reload', [\App\Http\Controllers\GuestPagesController::class, 'reloadContent']);
    });
});
