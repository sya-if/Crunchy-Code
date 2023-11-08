@extends('layouts.master')

@section('content')
<div class="main-container">
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Profile</h4>
                </div>
                
                <!-- Display any message based on the session -->
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif
                
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/user') }}">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div id="settings-content">
                <h2>User Settings</h2>
                <form method="POST" action="{{ route('user.update', $user) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" id="fullname" name="fullname" class="form-control" value="{{ $user->fullname }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="c-password">Confirm Password</label>
                        <input type="text" id="c-password" name="c-password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Settings</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection