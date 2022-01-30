<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function index() {
        // dd(request("search"));
        return view('posts', [
            "title" => "All Posts",
            // "posts" => Post::latest()->get() //lazy
            // "posts" => Post::with("user", "category")->latest()->get() //eager
            "posts" => Post::latest()->get() //eager
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => $post->title,
            "post" => $post
        ]);
    }
}
