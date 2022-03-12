<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('src/css/fontawesome.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap-icon/bootstrap-icons.css') }}">   
    {{-- <link rel="stylesheet" href="{{ asset('src/css/signin.css') }}"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> --}}
    <title>{{ $title }}</title>
</head>

<body>
    @include('navbar')
    @yield('container')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('src/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('src/js/popper.min.js') }}"></script>
    <script src="{{ asset('src/js/bootstrap.min.js') }}"></script>
</body>

</html>
