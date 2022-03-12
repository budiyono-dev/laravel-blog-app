@extends('index')
@section('container')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="h3 mb-3 font-weight-normal text-center mb-3 mt-3">Registration Form</h1>
                <form>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" placeholder="username"
                                autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com"
                                autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password">
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
@endsection
