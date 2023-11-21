<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');

// Store posts data
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

// Show edit post form
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');

// Update post data
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('auth');

// Delete post data
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('auth');

// Manage posts
Route::get('/posts/manage', [Post::class, 'manage'])->middleware('auth');

// Single blog post
Route::get('/posts/{post}', [PostController::class, 'show']);

// Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Store new user
Route::post('/users', [UserController::class, 'store']);

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Manage posts
Route::get('/posts/manage', [PostController::class, 'manage']);



