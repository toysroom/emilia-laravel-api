<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CategoryController::class, 'index']); // select *

Route::get('/categories/{category}', [CategoryController::class, 'show']); // select where id = 

Route::get('/categories/{category}/posts', [CategoryController::class, 'posts']);

Route::post('/categories', [CategoryController::class, 'store']); // insert 

Route::put('/categories/{category}', [CategoryController::class, 'update']); // update 

Route::delete('/categories/{category}', [CategoryController::class, 'destroy']); // delete 


Route::get('/posts', [PostController::class, 'index']);