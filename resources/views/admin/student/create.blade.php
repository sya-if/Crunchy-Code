@extends('layouts.master')

@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Add New Student</h4>
                        </div>

                        <!-- Display any message based on the session (e.g., success message) -->
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Student</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <h4 class="text-blue h4">Adding New Student</h4>
                </div>

                <div class="wizard-content">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf
                        <h5 class="mb-30">Student's Information</h5>

                        <section style="padding:20px;">
                            <!-- Full Name -->
                            <div class="row" style="margin-bottom: 20px;">
                                <label for="fullname" class="col-md-4 col-form-label">{{ __('Fullname') }}<span style="color: red;">*</span></label>
                                <div class="col-md-8">
                                    <input required id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                                    @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <!-- Nick Name -->
                            <div class=" row" style="margin-bottom:20px;">
                                <label for="nickname" class="col-md-4 col-form-label">{{ __('Nickname') }}<span style="color: red;">*</span></label>
                                <div class="col-md-8">
                                    <input  id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>

                                    @error('nickname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class=" row" style="margin-bottom:20px;">
                                <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}<span style="color: red;">*</span></label>
                                <div class="col-md-8">
                                    <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Photo -->
                            <div class="row" style="margin-bottom:20px;">
                                <label for="photo" class="col-md-4 col-form-label">{{ __('Photo') }}<span style="color: red;">*</span></label>
                                <div class="col-md-8">
                                    <input  id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('email') }}" required autocomplete="photo" required>

                                    @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <!-- Password -->
                            <div class=" row" style="margin-bottom:20px;">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}<span style="color: red;">*</span></label>
                                <div class="col-md-8">
                                    <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" required>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class=" row" style="margin-bottom:20px;">
                                <label for="password-confirm"  class="col-md-4 col-form-label">{{ __('Confirm Password') }}<span style="color: red;">*</span></label>
                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </section>
                        
                        <!-- Submit Button -->
                        <div class=" row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-wrap pd-20 mb-20 card-box">
        Crunchy Code Web Application System developed by Elysium
    </div>

</div>

@endsection
