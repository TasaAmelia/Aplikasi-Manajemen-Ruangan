@extends('layouts.layout_main')

@section("container")
<section class="section">
    <div class="section-header">
        <h1>Add Admin</h1>
        <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item">Data Admin</div>
</div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Add Admin</h2>

        @if (session('status'))
            <h6 class="alert alert-primary">{{ session('status') }}</h6>
        @endif

        <form action="{{ url('/adminAdd') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Username</label>
                            <input type="username" class="form-control" value="{{ old('username_admin', ) }}" name="username_admin" id="username_admin" placeholder="Username">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" name="password_admin" id="password_admin" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Fullname</label>
                            <input type="text" class="form-control" name="fullname_admin" id="fullname_admin" placeholder="Fullname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Usertype</label>
                            <select name="usertype_admin" id="usertype_admin" class="form-control">
                                <option selected>Admin</option>
                                <option>Super Admin</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="/"><button class="btn btn-secondary" type="reset">Cancel</button></a>
            </div>
        </form>
    </div>

    @endsection
