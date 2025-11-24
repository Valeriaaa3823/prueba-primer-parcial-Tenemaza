<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\ValidateAuthToken;


// Rutas protegidas por tu middleware personalizado que valida el token con el AuthService
Route::middleware([ValidateAuthToken::class])->group(function () {

    Route::get('/posts', [PostController::class, 'index']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/{id}', [PostController::class, 'show']);
    Route::put('/posts/{id}', [PostController::class, 'update']);
    Route::delete('/posts/{id}', [PostController::class, 'destroy']);
    Route::apiResource('posts', PostController::class);

});
