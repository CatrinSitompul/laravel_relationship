<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\UserController;
// Route::get('/users', [UserController::class, 'index']);
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
