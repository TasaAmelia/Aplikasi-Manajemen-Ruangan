@extends('layouts.layout_main')

@section("container")
<section class="section">
    <div class="section-header">
        <h1>Data Admin</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Data Admin</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Data Admin</h2>

        @if (session('statusDelete'))
            <h6 class="alert alert-danger">{{ session('statusDelete') }}</h6>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/adminAdd">
                            <h4>Add admin</h4>
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Usertype</th>
                                    <th>Fullname</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($admins as $admin )
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $admin['username_admin'] }}</td>
                                    <td>{{ $admin['password_admin'] }}</td>
                                    <td>{{ $admin['usertype_admin'] }}</td>
                                    <td>{{ $admin['fullname_admin'] }}</td>
                                    <td><a href="{{ "/adminEdit" .$admin['id'] }}" class="btn btn-success">Update</a>
                                        <a href={{ "/adminDelete/" .$admin['id'] }} class="btn btn-danger" onclick="return confirm('Are you sure want to delete ?')">Delete</a></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                    @include('layouts.partials.pagination')


                </div>
            </div>

</section>

@endsection
