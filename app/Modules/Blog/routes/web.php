<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Blog\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('blog.posts.show');
