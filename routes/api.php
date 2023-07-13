<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('orders', \App\Http\Controllers\API\Order\StoreController::class);

Route::get('products/filters', \App\Http\Controllers\API\Product\FilterListController::class);

Route::get('/products', \App\Http\Controllers\API\Product\IndexController::class);

Route::get('/products/{product}', \App\Http\Controllers\API\Product\ShowController::class);

Route::get('/categories', \App\Http\Controllers\API\Category\IndexController::class);

Route::get('/tags', \App\Http\Controllers\API\Tag\IndexController::class);

Route::post('/products/filterproducts', \App\Http\Controllers\API\Product\FilterProductsController::class);