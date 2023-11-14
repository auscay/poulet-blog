<?php

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
Route::get('/', function () {
    return view('posts', [
        'heading' => 'Latest Posts',
        'posts' => Post::all()
    ]);
});

// Single blog post
Route::get('posts/{id}', function ($id) {
    return view('post', [
        'post' => Post::find($id)
    ]);
});
