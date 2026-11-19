<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'home'])->name('home');
Route::get('/articles/index',[ArticleController::class,'index'])->name('articlesIndex');
Route::get('/articles/create',[ArticleController::class,'create'])->name('articlesCreate');
Route::post('/articles/store',[ArticleController::class,'store'])->name('articlesStore');
Route::get('/articles/detail/{article}',[ArticleController::class,'show'])->name('articlesShow');
Route::get('/articles/edit/{article}',[ArticleController::class,'edit'])->name('articlesEdit');
Route::put('/articles/update/{article}',[ArticleController::class,'update'])->name('articlesUpdate');
Route::delete('/articles/destroy/{article}',[ArticleController::class,'destroy'])->name('articlesDestroy');



