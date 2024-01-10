@extends('layouts.master')

@section('content')
<div class="main-container">
    @if(Session::has('success'))
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <b>{{ Session::get('success') }}</b>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Student List</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Student List</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <div class="pull-right">
                                <a href="{{ route('users.create') }}" class="btn btn-primary">Add Student</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Striped table start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-right">
                        <a href="{{ route('users.create') }}" class="btn btn-info float-end">Add New Student</a>
                    </div>
                    <div class="pull-left">
                        <h4 class="text-blue h4">List of Students</h4>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Nick Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Photo</th>
                            <th scope="col" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->nickname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <img src="{{ asset('uploads/users/'.$user->photo) }}" style="width:100px;">
                                </td>
                                <td>
                                    <a href="{{ route('users.edit', $user) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Striped table End -->
        </div>
    </div>
</div>
@endsection
