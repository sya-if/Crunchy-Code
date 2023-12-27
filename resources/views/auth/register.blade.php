@extends('layouts.app')

@section('content')
<div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="{{ route('login') }}">
                <img src="../../../vendors/images/deskapp-logo.svg" alt="">
            </a>
        </div>

        <div class="login-menu">
            <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container" style="padding-top:50px">
        <div class="row align-items-center">

            <div class="col-md-6 col-lg-7 mt-3">
                <img src="../../../vendors/images/register-page-img.png" alt="">
            </div>

            <div class="col-md-6 col-lg-5 mt-3">
                <div class="register-box bg-white box-shadow border-radius-10">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Full Name -->
                            <div class="form-group row">
                                <label for="fullname" class="col-md-4 col-form-label">{{ __('Fullname') }}</label>
                                <div class="col-md-8">
                                    <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Nick Name -->
                            <div class="form-group row">
                                <label for="nickname" class="col-md-4 col-form-label">{{ __('Nickname') }}</label>
                                <div class="col-md-8">
                                    <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>

                                    @error('nickname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>
                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>
                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="form-group" style="margin-left: 80px;">
                                    <label for="adminCheckbox" style="display: flex; align-items: center;">
                                        <input style="margin-right: 10px;" type="checkbox" id="adminCheckbox" name="adminCheckbox" value="admin" onclick="toggleCheckbox()">
                                        <span>I am Admin</span>
                                    </label>
                                </div>
                            </div>

                            <script>
                                function toggleCheckbox() {
                                    var adminCheckbox = document.getElementById("adminCheckbox");
                                    if (adminCheckbox.checked) {
                                        var enteredPassword = prompt("Enter the password:");
                                        var correctPassword = "12345678"; // Replace with your correct password
                                        if (enteredPassword === correctPassword) {
                                            // Set the value of the checkbox to "admin"
                                            adminCheckbox.value = "admin";
                                        } else {
                                            // Uncheck the checkbox if the password is incorrect
                                            adminCheckbox.checked = false;
                                        }
                                    }
                                }
                                
                            </script>

                            <!-- Submit Button -->
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
