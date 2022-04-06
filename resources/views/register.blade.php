@extends('index')
@section('container')
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="h3 mb-3 font-weight-normal text-center mb-3 mt-3">Registration Form</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" placeholder="username"
                                autofocus value="{{ old('username') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" autofocus
                                value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com"
                                value="{{ old('email') }}" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password">
                                <div class="input-group-append toogle-password">
                                    <span class=" input-group-text bi bi-eye-slash"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-5 mb-2 btn-block">Register</button>
                    </div>
                </form>
                <small>Not registered? <a href="/register">Register</a></small>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            let errors = @json($errors->all());

            $(document).ready(function() {
                console.log("ready");
                if (errors.length > 0) {
                    console.log("show aler");
                    showAllert(errors[0], 'danger');
                }
            });

            
        </script>
        <script src="{{ asset('src/js/app/register.js') }}"></script>
    @endpush
@endsection
