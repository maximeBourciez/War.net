<?php

// Routes pour le controller Articles
Route::get('api/articles', [App\Http\Controllers\Api\ArticlesController::class, 'index']);
Route::get('api/article/{id}', [App\Http\Controllers\Api\ArticlesController::class, 'show']);
Route::put('api/article/{id}', [App\Http\Controllers\Api\ArticlesController::class, 'update']);
Route::delete('api/article/{id}', [App\Http\Controllers\Api\ArticlesController::class, 'destroy']);
Route::get('api/article/search/{titre}', [App\Http\Controllers\Api\ArticlesController::class, 'search']);

// Routes pour le controller Categories
Route::resource('api/categories', App\Http\Controllers\Api\CategoriesController::class);

// Routes pour le controller Images
Route::resource('api/images', App\Http\Controllers\Api\ImagesController::class);