<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Routes pour le controller Articles
Route::get('api/articles', [App\Http\Controllers\Api\ArticlesController::class, 'index']);
Route::get('api/article/{id}', [App\Http\Controllers\Api\ArticlesController::class, 'show']);
Route::put('api/article/{id}', [App\Http\Controllers\Api\ArticlesController::class, 'update']);
Route::delete('api/article/{id}', [App\Http\Controllers\Api\ArticlesController::class, 'destroy']);
Route::get('api/article/search/{titre}', [App\Http\Controllers\Api\ArticlesController::class, 'search']);

// Routes pour le controller Categories
Route::get('api/categories', [App\Http\Controllers\Api\CategoriesController::class, 'index']);
Route::get('api/categorie/articles/{id}', [App\Http\Controllers\Api\CategoriesController::class, 'articles']);

// Routes pour le controller Images
// Route::resource('api/images', App\Http\Controllers\Api\ImagesController::class);