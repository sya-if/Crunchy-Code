
@extends('layouts.master')

@php($user = Auth::user())

<style>
    .required {
        color: red;
    }
</style>

@section('content')
<div class="main-container">
    <!-- Display any message based on the session -->
    @if(Session::has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Profile</h4>
                        </div>
                        
                        
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Student Progress  -->
            @if($user->role == ('student'))
            <div class="row">
                <div class="row justify-content-center">
                    <div class="row clearfix progress-box">
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                            <div class="card-box pd-20 height-80-p">
                                <div class="progress-box text-center">
                                    <input type="text" class="knob dial1" value="80" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#1b00ff" data-angleOffset="180" readonly>
                                    <h5 class="text-blue padding-top-10 h5">Module 1</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-20 height-80-p">
                                <div class="progress-box text-center">
                                    <input type="text" class="knob dial2" value="70" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00e091" data-angleOffset="180" readonly>
                                    <h5 class="text-light-green padding-top-10 h5">Module 2</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-20 height-80-p">
                                <div class="progress-box text-center">
                                    <input type="text" class="knob dial3" value="90" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#f56767" data-angleOffset="180" readonly>
                                    <h5 class="text-light-orange padding-top-10 h5">Module 3</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-20 height-80-p">
                                <div class="progress-box text-center">
                                    <input type="text" class="knob dial4" value="65" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#a683eb" data-angleOffset="180" readonly>
                                    <h5 class="text-light-purple padding-top-10 h5">Module 4</h5>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @endif

            <div class="row">
                <!-- Bahagian Pertama Personal Details -->
                <!-- Contact Information -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="profile-photo">
                            <a href="#" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <img src="{{ asset ('uploads/users/'.$user->photo)}}" style="width:160px; border-radius:40px;" alt="profile picture">
                            
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-footer">
                                            <form method="POST" action="{{ route('update-photo') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="photo" class="col-md-4 col-form-label">{{ __('Photo') }}</label>
                                                    <div class="col-md-8">
                                                        <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo">

                                                        @error('photo')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- Add an "Update" button -->
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if($user-> role == ('admin'))
                        <h5 class="text-center h5 mb-0">{{ old('fullname' , $user->fullname ) }}</h5>
                        <p class="text-center text-muted font-14">I'm excited to introduce our comprehensive web development program, designed to equip you with the essential skills and knowledge to build dynamic and engaging websites that make a lasting impact in the digital world.</p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                            <ul>
                                <li>
                                    <span>Email Address:</span>
                                    {{ old('email' , $user->email ) }}
                                </li>
                                <li>
                                    <span>Phone Number:</span>
                                    {{ old('phone' , $user->phone ) }}
                                </li>
                            </ul>
                        </div>

                        @elseif($user->role == ('student'))
                        <p class="text-center text-muted font-14">{{ old('fullname' , $user->fullname ) }}</p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                            <ul>
                                <li>
                                    <span>Email Address:</span>
                                    {{ old('email' , $user->email ) }}
                                </li>
                                <li>
                                    <span>Bio:</span>
                                    {{ old('bio' , $user->bio ) }}
                                </li>
                                <li>
                                    <span>School:</span>
                                    {{ old('school' , $user->school ) }}
                                </li>
                                <li>
                                    <span>Date of Birth:</span>
                                    {{ old('dob' , $user->dob ) }}
                                </li>
                            </ul>
                        </div>

                        
                        @endif
                        
                    </div>
                </div>


                <!-- Bahagian Kedua Personal Details -->
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="card">
                                <div class="card-header">
                                    Personal Details
                                </div>

                                <div class="card-body">
                                    <!-- Laravel provide security elements everytime we submit. It will send one encrypted token value to prevent any unauthorized attack  -->
                                    <form method="POST" action="{{ route('profile.post')}}">

                                        <!-- Setiap form perlu provide csrf -->
                                        @csrf

                                        <table class="table">

                                            <!-- Default Personal Details -->

                                            <!-- Full Name -->
                                            <tr>
                                                <td>Full Name <span class="required">*</span></td>
                                                <td>
                                                    <input type="text" name="fullname" value=" {{ old('fullname' , $user->fullname ) }}" class="form-control">
                                                    @error('fullname')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <!-- Nickname -->
                                            <tr>
                                                <td>Nickname <span class="required">*</span></td>
                                                <td>
                                                    <input type="text" name="nickname" value=" {{ old('nickname' , $user->nickname ) }}" class="form-control">
                                                    @error('nickname')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <!-- Email -->
                                            <tr>
                                                <td>Email <span class="required">*</span></td>
                                                <td>
                                                    <input type="text" name="email" value="{{ old('email' , $user->email ) }}" class="form-control">
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <!-- Personal Details Admin -->
                                            @if($user->role == 'admin')
                                             <!-- Phone -->
                                             <tr>
                                                <td>Phone <span class="required">*</span></td>
                                                <td>
                                                    <input type="text" name="phone" value="{{ old('phone' , $user->phone ) }}" class="form-control">
                                                    @error('phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>
                                            @endif

                                            <!-- Personal Details Student -->
                                            @if($user->role == 'student')

                                            <!-- School -->
                                            <tr>
                                                <td>School <span class="required">*</span></td>
                                                <td>
                                                    <input type="text" name="school" value="{{ old('school', $user->school )}}" class="form-control">
                                                    @error('school')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <!-- Biodata -->
                                            <tr>
                                                <td>Bio <span class="required">*</span></td>
                                                <td>
                                                    <input type="text" name="bio" value="{{ old('bio' , $user->bio ) }}" class="form-control">
                                                    @error('bio')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>
                                            
                                            <!-- Date of Birth -->
                                            <tr>
                                                <td>Date of Birth <span class="required">*</span></td>
                                                <td>
                                                    <input type="date" name="dob" value="{{ old('dob' , $user-> dob) }}" class="form-control">
                                                    @error('dob')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>
                                            @endif

                                            <!-- Password -->
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                    <input type="password" name="password" class="form-control">
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <!-- Confirm Password -->
                                            <tr>
                                                <td>Confirm Password</td>
                                                <td>
                                                    <input type="password" name="password_confirmation"  class="form-control">
                                                    @error('password_confirmation')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </td>
                                            </tr>

                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection