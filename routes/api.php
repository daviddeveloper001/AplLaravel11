<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostControllerV1;
use App\Http\Controllers\Api\V2\PostController as PostControllerV2;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource('v1/posts', PostControllerV1::class)->only('index', 'show', 'update', 'destroy');

    Route::apiResource('v2/posts', PostControllerV2::class)->only('index', 'show');
});

Route::post('login', [LoginController::class, 'login'])->name('login');