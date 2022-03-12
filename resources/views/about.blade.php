@extends('index')
@section('container')
    <div class="container-fluid mt-3">

        <h1>Halaman About</h1>
        <h3>{{ $name }}</h3>
        <h3>{{ $email }}</h3>
        <img src="dp.jpg" alt="" height="200" width="200" class="img-thumbnail rounded-pill">
    </div>
@endsection
