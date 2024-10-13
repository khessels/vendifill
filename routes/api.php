<?php

use App\Http\Controllers\GuestPagesController;
use App\Http\Controllers\RedisController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MachineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//
//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');


Route::group(['prefix' => 'v1'], function() {

    Route::get('machine/state/{uuid}', [MachineController::class, 'state']);
    Route::get('machine/inventory/{uuid}', [MachineController::class, 'inventory']);

    Route::post('register', [UserAuthController::class, 'register']);
    Route::get('token', [UserAuthController::class, 'getToken']);

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::get('user', function (Request $request) {
            return $request->user();
        });
        Route::get('user/profile', [UserController::class, 'profile']);
        Route::delete('token', [UserAuthController::class, 'tokenDelete']);
        Route::get('profile', [UserController::class, 'profile']);

        Route::group(['middleware' => ['can:content-flush']], function () {
            // used by strapi
            Route::get('content/flush', [RedisController::class, 'flushContent']);
        });

        Route::group(['middleware' => ['role:developer']], function () {
            Route::post('redis/ping', [RedisController::class, 'ping']);
            Route::post('redis/test/ttl', [RedisController::class, 'test_ttl']);
            Route::post('redis/content/expire/{language?}', [GuestPagesController::class, 'expireContent']);
            Route::post('redis/content/reload', [GuestPagesController::class, 'reloadContent']);
        });

    });

});
