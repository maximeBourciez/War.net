<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Routes pour le controller Articles
Route::resource('articles', App\Http\Controllers\Api\ArticlesController::class);
Route::get('article/{id}', [App\Http\Controllers\Api\ArticlesController::class, 'show']);
Route::put('article/{id}', [App\Http\Controllers\Api\ArticlesController::class, 'update']);
Route::delete('article/{id}', [App\Http\Controllers\Api\ArticlesController::class, 'destroy']);
Route::get('article/search/{titre}', [App\Http\Controllers\Api\ArticlesController::class, 'search']);

// Routes pour le controller Categories
Route::resource('categories', App\Http\Controllers\Api\CategoriesController::class);

// Routes pour le controller Images
Route::resource('images', App\Http\Controllers\Api\ImagesController::class);
