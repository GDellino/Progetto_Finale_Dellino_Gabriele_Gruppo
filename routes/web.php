<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/',[PublicController::class, "homepage"])->name('homepage');

// Rotte Articolo
Route::get('/create/article',[ArticleController::class,'create'])->name('article.create')->middleware('auth');
Route::get('/article/index', [ArticleController::class,'index'])->name('article.index');
Route::get('/show/article/{article}',[ArticleController::class,'show'])->name('article.show');

// Rotta Categorie
Route::get('/category/{category}',[ArticleController::class,'byCategory'])->name('byCategory');

// Rotte Reviso
Route::get('/revisor/index',[RevisorController::class,'index'])->name('revisor.index');