<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    //show all posts
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()->filter
            (request(['tag']))->simplePaginate(4)
        ]);
    }

    //show single post
    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    //show create post form
    public function create() {
        return view('posts.create');
    }

    //store blog posts
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'slug' => ['required', Rule::unique('posts', 'author')],
            'pretext' => 'required',
            'tags' => 'required',
            'location' => 'required',
            'content' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Post::create($formFields);

        return redirect('/')->with('message', 'Post Created Successfully');
    }

    //show edit post form
    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    //update blog posts
    public function update(Request $request, Post $post) {
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'slug' => ['required'],
            'pretext' => 'required',
            'tags' => 'required',
            'location' => 'required',
            'content' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $post->update($formFields);

        return back()->with('message', 'Post Updated Successfully');
    }

    // delete blog posts
    public function destroy(Post $post) {
        $post->delete();
        return redirect('/')->with('message', 'Post Deleted Successfully');
    }

}
