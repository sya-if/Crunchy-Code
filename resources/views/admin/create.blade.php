@extends('layouts.master')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Profile</h4>
                            </div>

                            <!-- Display any message based on the session (e.g., success message) -->
                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                    {{ Session::get('message') }}
                                </div>
                            @endif

                            <!-- Breadcrumb navigation -->
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Student</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Student</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Student creation form -->
                        <form method="post" action="{{ route('user.store') }}">
                            
                            @csrf <!-- CSRF token -->

                            <!-- Student Name -->
                            <div class="form-group">
                                <label for="fullname">Student Name</label>
                                <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter Student Name">
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                            </div>

                            <!-- Phone Number -->
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone Number">
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Create Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
