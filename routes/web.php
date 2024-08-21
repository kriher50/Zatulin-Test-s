<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::get('/articles', [ArticleController::class, 'catalog'])->name('articles.catalog');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
