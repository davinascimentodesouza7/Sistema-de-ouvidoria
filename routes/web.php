<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'show']);
Route::post('/post', [PostController::class, 'store'])->name('post.store');
