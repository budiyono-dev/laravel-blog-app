<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller {
    public function index() {
        $req = [
            'search' => request('search'),
            'category' => request('category'),
            'author' => request('author')

        ];
        $title = "All Posts";
        if ($req['author']  != null) {
            $user = User::where('username',$req['author'])->first();
            $title .= ' By : ' . $user->name;
        }
        if ($req['category']  != null) {
            $title .= ' in ' . $req['category'];
        }
        // dd(Post::latest()->Filter($req)->get());
        return view("posts", [
            "title" => $title,
            // "posts" => Post::latest()->Filter($req)->get()
            "posts" => Post::latest()->Filter($req)->paginate(4)->withQueryString()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => $post->title,
            "post" => $post
        ]);
    }
}
