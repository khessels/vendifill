<?php

use App\Http\Controllers\RedisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\GuestPagesController;
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

    Route::post('register', [UserAuthController::class, 'register']);
    Route::post('login', [UserAuthController::class, 'login']);
});


Route::group(['prefix' => 'v1', 'middleware' => 'role:developer'], function() {

    Route::get('user/profile', [UserController::class, 'profile']);
    Route::post('logout', [UserAuthController::class, 'logout']);

    Route::post('redis/test/ping', [RedisController::class, 'ping']);
    Route::post('redis/test/ttl', [RedisController::class, 'test_ttl']);

    Route::post('redis/content/expire/{language?}', [GuestPagesController::class, 'expireContent']);
    Route::post('redis/content/reload', [GuestPagesController::class, 'reloadContent']);

});
