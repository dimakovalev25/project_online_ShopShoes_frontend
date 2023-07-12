<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
        Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('category.create');
        Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('category.store');
        Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('category.edit');
        Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('category.show');
        Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('category.update');
        Route::delete('/{category}', \App\Http\Controllers\Category\DeleteController::class)->name('category.delete');

    });

    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', \App\Http\Controllers\Tag\IndexController::class)->name('tag.index');
        Route::get('/create', \App\Http\Controllers\Tag\CreateController::class)->name('tag.create');
        Route::post('/', \App\Http\Controllers\Tag\StoreController::class)->name('tag.store');
        Route::get('/{tag}/edit', \App\Http\Controllers\Tag\EditController::class)->name('tag.edit');
        Route::get('/{tag}', \App\Http\Controllers\Tag\ShowController::class)->name('tag.show');
        Route::patch('/{tag}', \App\Http\Controllers\Tag\UpdateController::class)->name('tag.update');
        Route::delete('/{tag}', \App\Http\Controllers\Tag\DeleteController::class)->name('tag.delete');

    });

    Route::group(['prefix' => 'sizes'], function () {
        Route::get('/', \App\Http\Controllers\Size\IndexController::class)->name('size.index');
        Route::get('/create', \App\Http\Controllers\Size\CreateController::class)->name('size.create');
        Route::post('/', \App\Http\Controllers\Size\StoreController::class)->name('size.store');
        Route::get('/{size}/edit', \App\Http\Controllers\Size\EditController::class)->name('size.edit');
        Route::get('/{size}', \App\Http\Controllers\Size\ShowController::class)->name('size.show');
        Route::patch('/{size}', \App\Http\Controllers\Size\UpdateController::class)->name('size.update');
        Route::delete('/{size}', \App\Http\Controllers\Size\DeleteController::class)->name('size.delete');

    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', \App\Http\Controllers\Product\IndexController::class)->name('product.index');
        Route::get('/create', \App\Http\Controllers\Product\CreateController::class)->name('product.create');
        Route::post('/', \App\Http\Controllers\Product\StoreController::class)->name('product.store');
        Route::get('/{product}/edit', \App\Http\Controllers\Product\EditController::class)->name('product.edit');
        Route::get('/{product}', \App\Http\Controllers\Product\ShowController::class)->name('product.show');
        Route::patch('/{product}', \App\Http\Controllers\Product\UpdateController::class)->name('product.update');
        Route::delete('/{product}', \App\Http\Controllers\Product\DeleteController::class)->name('product.delete');

    });

    Route::group(['prefix' => 'brands'], function () {
        Route::get('/', \App\Http\Controllers\Brand\IndexController::class)->name('brand.index');
        Route::get('/create', \App\Http\Controllers\Brand\CreateController::class)->name('brand.create');
        Route::post('/', \App\Http\Controllers\Brand\StoreController::class)->name('brand.store');
        Route::get('/{brand}/edit', \App\Http\Controllers\Brand\EditController::class)->name('brand.edit');
        Route::get('/{brand}', \App\Http\Controllers\Brand\ShowController::class)->name('brand.show');
        Route::patch('/{brand}', \App\Http\Controllers\Brand\UpdateController::class)->name('brand.update');
        Route::delete('/{brand}', \App\Http\Controllers\Brand\DeleteController::class)->name('brand.delete');

    });

});

Route::get('{page}', \App\Http\Controllers\Frontend\IndexController::class)->where('page', '.*');