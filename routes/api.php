<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ScategorieController;
use App\Http\Controllers\ArticleController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class);
    }); /* yesna3hom automatique 
Route::get("/categories",[CategorieController::class,"index"]);
Route::post("/categories",[CategorieController::class,"store"]);
Route::get("/categories/{id}",[CategorieController::class,"show"]);
Route::delete("/categories/{id}",[CategorieController::class,"destroy"]);
Route::put("/categories/{id}",[CategorieController::class,"update"]); */
Route::middleware('api')->group(function () {
    Route::resource('scategories', ScategorieController::class);
    });
Route::get('/scat/{idcat}', [ScategorieController::class,'showSCategorieByCAT']);
Route::middleware('api')->group(function () {
    Route::resource('articles', ArticleController::class);
    });
Route::get('/listarticles/{idscat}', [ArticleController::class,'showArticlesBySCAT']);
Route::get('/articles/art/articlespaginate', [ArticleController::class,'articlesPaginate']);
