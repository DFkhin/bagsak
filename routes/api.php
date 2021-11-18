<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LsiController;
use App\Http\Controllers\API\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [LsiController::class,'login']);
Route::post('register', [LsiController::class, 'register']);
Route::post('signregister', [LsiController::class, 'signregister']);

Route::post('reset-password', [LsiController::class, 'reset-password']);

Route::get('/test-query',[LsiController::class,'testQuery']);
Route::get('get-all-posts',[PostController::class,'getAllPosts']);