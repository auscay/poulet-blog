<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //show all posts
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()->filter
            (request(['tag']))->get()
        ]);
    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
