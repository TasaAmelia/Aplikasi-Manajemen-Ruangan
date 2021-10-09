@extends('layouts.layout_login')

@section('logins')
<div class="card card-primary">
    <div class="card-header">
        <h4>Login</h4>
    </div>
    <div class="card-body">

        @if (session('loginError'))
        <h6 class="alert alert-danger">{{ session('loginError') }}</h6>
        @endif

        <form method="POST" action="/login">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input id="username_admin" type="text" class="form-control" name="username_admin" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                    Please fill in your username
                </div>
            </div>

            <div class="form-group">
                <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                </div>
                <input id="password_admin" type="password" class="form-control" name="password_admin" tabindex="2" required>
                <div class="invalid-feedback">
                    please fill in your password
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                </button>
            </div>
        </form>

    </div>
</div>


@endsection
