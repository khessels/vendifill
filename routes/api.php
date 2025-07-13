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



Route::get('machine/state/{uuid}', [MachineController::class, 'state'])->middleware('response-format:default,passthrough');
Route::get('machine/inventory/{uuid}', [MachineController::class, 'inventory'])->middleware('response-format:default,passthrough');

Route::post('register', [UserAuthController::class, 'register'])->middleware('response-format:default,passthrough');
Route::get('token', [UserAuthController::class, 'getToken'])->middleware('response-format:default,passthrough');
Route::get('hello', [GuestPagesController::class, 'hello'])->middleware('response-format:default,passthrough');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('user', function (Request $request) {
        return $request->user();
    })->middleware('response-format:default,passthrough');
    Route::get('user/profile', [UserController::class, 'profile'])->middleware('response-format:default,passthrough');
    Route::delete('token', [UserAuthController::class, 'tokenDelete'])->middleware('response-format:default,passthrough');
    Route::get('profile', [UserController::class, 'profile'])->middleware('response-format:default,passthrough');

    Route::group(['middleware' => ['can:content-flush']], function () {
        // used by strapi
        Route::get('content/flush', [RedisController::class, 'flushContent'])->middleware('response-format:default,passthrough');
    });

    Route::group(['middleware' => ['role:developer']], function () {
        Route::post('redis/ping', [RedisController::class, 'ping'])->middleware('response-format:default,passthrough');
        Route::post('redis/test/ttl', [RedisController::class, 'test_ttl'])->middleware('response-format:default,passthrough');
        Route::post('redis/content/expire/{language?}', [GuestPagesController::class, 'expireContent'])->middleware('response-format:default,passthrough');
        Route::post('redis/content/reload', [GuestPagesController::class, 'reloadContent'])->middleware('response-format:default,passthrough');
    });
});
