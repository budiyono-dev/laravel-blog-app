@extends('index')
@section('container')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h1 class="h3 mb-3 font-weight-normal text-center mb-5 mt-5">Login</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com"
                                autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password">
                                <div class="input-group-append toogle-password">
                                    <span class=" input-group-text bi bi-eye-slash"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-5 mb-2 btn-block">Login</button>
                    </div>
                </form>
                <small>Not registered? <a href="/register">Register</a></small>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            let errors = @json($errors->all());
            const btnTogglePassword = document.querySelector('.toogle-password');
            const formPassword = document.getElementById('password');

            btnTogglePassword.addEventListener('click', (e)=>{
                tooglePassword(e,formPassword);
            });

            $(document).ready(function() {
                if (errors.length > 0) {
                    showAllert(errors[0], 'danger');
                }
            });
        </script>
    @endpush
@endsection
