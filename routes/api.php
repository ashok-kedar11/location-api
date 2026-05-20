<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

// json api

JsonApiRoute::server('v1')
    ->prefix('v1')
    ->middleware('auth:sanctum') // added auth protection
    ->resources(function ($server) {

        $server->resource('countries', JsonApiController::class);
        $server->resource('states', JsonApiController::class);
        $server->resource('cities', JsonApiController::class);
    });