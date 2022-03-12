@extends('index')
@section('container')
    <div class="container-fluid mt-3">
        <h1>Halaman Post</h1>
        <article>
            <h2>{{ $post->title }}</h2>
            <p>Oleh : <a href="/posts?author={{ $post->user->username }}">{{ $post->user->name }}</a> <a
                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="...">
        </article>
        <article class="my-3 fs-5">
            <p>{!! $post->body !!}</p>
        </article>
        <a href="/posts">Back to Posts</a>
    </div>
@endsection
