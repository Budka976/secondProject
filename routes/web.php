<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/posts', [PostController::class, 'index']);
route::get('/posts/create', [PostController::class, 'create']);
route::post('/post', [PostController::class, 'store']);