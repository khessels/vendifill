<?php

use App\Http\Controllers\GuestPagesController;
use App\Http\Controllers\RedisController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//
//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');


Route::group(['prefix' => 'v1'], function() {
    Route::post('register', [UserAuthController::class, 'register']);
    Route::get('token', [UserAuthController::class, 'getToken']);

    Route::group(['middleware' => ['auth:sanctum']], function() {
        Route::get('user/profile', [UserController::class, 'profile']);
        Route::delete('token', [UserAuthController::class, 'tokenDelete']);

        Route::post('redis/ping', [RedisController::class, 'ping']);
        Route::post('redis/test/ttl', [RedisController::class, 'test_ttl']);

        Route::post('redis/content/expire/{language?}', [GuestPagesController::class, 'expireContent']);
        Route::post('redis/content/reload', [GuestPagesController::class, 'reloadContent']);
    });

});
