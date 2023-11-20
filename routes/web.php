<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// All blog posts
Route::get('/', [PostController::class, 'index']);

// Show create post form
Route::get('posts/create', [PostController::class, 'create']);

// Store posts data
Route::post('posts', [PostController::class, 'store']);

// Show edit post form
Route::get('posts/{post}/edit', [PostController::class, 'edit']);

// Update post data
Route::put('posts/{post}', [PostController::class, 'update']);

// Delete post data
Route::delete('posts/{post}', [PostController::class, 'destroy']);

// Single blog post
Route::get('posts/{post}', [PostController::class, 'show']);




