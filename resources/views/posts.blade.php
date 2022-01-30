@extends('index')
@section('container')
    <h1 class="text-center mb-3">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search">
                    <button class="btn btn-primary" type="submit" >Search</button>
                  </div>
            </form>
        </div>
    </div>
    @if ($posts->count() > 0)
        @php
            $firstPost = $posts->first();
        @endphp
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $firstPost->category->name }}" class="card-img-top"
                alt="...">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $firstPost->slug }}">{{ $firstPost->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        Oleh <a href="/author/{{ $firstPost->user->username }}">{{ $firstPost->user->name }}</a>
                        <a href="/categories/{{ $firstPost->category->slug }}">{{ $firstPost->category->name }}</a>
                    </small>
                </p>
                <p class="card-text">{{ $firstPost->excerpt }}</p>
                <a href="/posts/{{ $firstPost->slug }}" class="btn-primary"></a>
                <p class="card-text">
                    <small class="text-muted">{{ $firstPost->created_at->diffForHumans() }}</small>
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute p-2 rounded" style="background-color: rgba(0, 0, 0, 0.7)">
                                <a class="text-decoration-none text-white"
                                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                                </h5>
                                <p>
                                    <small class="text-muted">
                                        Oleh
                                        <a href="/author/{{ $firstPost->user->username }}">
                                            {{ $firstPost->user->name }}
                                        </a>{{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found. </p>
    @endif
@endsection