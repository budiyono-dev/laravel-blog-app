@extends('index')
@section('container')
    <div class="container-fluid mt-3">
        <h1>Post Category </h1>

        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                                alt="...">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill py-3 fs-3"
                                    style="background-color: rgba(0,0,0,0.6)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
