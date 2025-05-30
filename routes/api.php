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



Route::get('machine/state/{uuid}', [MachineController::class, 'state'])->middleware('ResponseFormat:default,passthrough');
Route::get('machine/inventory/{uuid}', [MachineController::class, 'inventory'])->middleware('ResponseFormat:default,passthrough');

Route::post('register', [UserAuthController::class, 'register'])->middleware('ResponseFormat:default,passthrough');
Route::get('token', [UserAuthController::class, 'getToken'])->middleware('ResponseFormat:default,passthrough');
Route::get('hello', [GuestPagesController::class, 'hello'])->middleware('ResponseFormat:default,passthrough');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('user', function (Request $request) {
        return $request->user();
    })->middleware('ResponseFormat:default,passthrough');
    Route::get('user/profile', [UserController::class, 'profile'])->middleware('ResponseFormat:default,passthrough');
    Route::delete('token', [UserAuthController::class, 'tokenDelete'])->middleware('ResponseFormat:default,passthrough');
    Route::get('profile', [UserController::class, 'profile'])->middleware('ResponseFormat:default,passthrough');

    Route::group(['middleware' => ['can:content-flush']], function () {
        // used by strapi
        Route::get('content/flush', [RedisController::class, 'flushContent'])->middleware('ResponseFormat:default,passthrough');
    });

    Route::group(['middleware' => ['role:developer']], function () {
        Route::post('redis/ping', [RedisController::class, 'ping'])->middleware('ResponseFormat:default,passthrough');
        Route::post('redis/test/ttl', [RedisController::class, 'test_ttl'])->middleware('ResponseFormat:default,passthrough');
        Route::post('redis/content/expire/{language?}', [GuestPagesController::class, 'expireContent'])->middleware('ResponseFormat:default,passthrough');
        Route::post('redis/content/reload', [GuestPagesController::class, 'reloadContent'])->middleware('ResponseFormat:default,passthrough');
    });
});
