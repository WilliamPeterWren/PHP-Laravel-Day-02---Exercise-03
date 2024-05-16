<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostParameterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class,'index']);
Route::get('/post/show', [PostController::class,'show']);
Route::get('/post/edit', [PostController::class,'edit']);
Route::get('/post/{id}', [PostParameterController::class,'index']);