<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/products', App\Http\Controllers\Api\ProductController::class);

// Route::get('products', [ProductController::class, 'index']);
// Route::get('products/{id}', [ProductController::class, 'show']);
// Route::post('products', [ProductController::class, 'store']);
// Route::put('products/{id}', [ProductController::class, 'update']);
// Route::delete('products/{id}', [ProductController::class, 'destroy']);
