@extends('layouts.master')

@php($user = Auth::user())

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
                        
                        <!-- Display any message based on the session -->
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        
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
                <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <div class="row clearfix progress-box">

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                            <div class="card-box pd-30 height-100-p">
                                <div class="progress-box text-center">
                                    <input type="text" class="knob dial1" value="80" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#1b00ff" data-angleOffset="180" readonly>
                                    <h5 class="text-blue padding-top-10 h5">Module 1</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                            <div class="card-box pd-30 height-100-p">
                                <div class="progress-box text-center">
                                    <input type="text" class="knob dial2" value="70" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00e091" data-angleOffset="180" readonly>
                                    <h5 class="text-light-green padding-top-10 h5">Module 2</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                            <div class="card-box pd-30 height-100-p">
                                <div class="progress-box text-center">
                                    <input type="text" class="knob dial3" value="90" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#f56767" data-angleOffset="180" readonly>
                                    <h5 class="text-light-orange padding-top-10 h5">Module 3</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                            <div class="card-box pd-30 height-100-p">
                                <div class="progress-box text-center">
                                    <input type="text" class="knob dial4" value="65" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#a683eb" data-angleOffset="180" readonly>
                                    <h5 class="text-light-purple padding-top-10 h5">Module 4</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="row">
                <!-- Bahagian Pertama Personal Details -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="profile-photo">
                            <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <img src="vendors/images/photo1.jpg" alt="" class="avatar-photo">
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pd-5">
                                            <div class="img-container">
                                                <img id="image" src="vendors/images/photo2.jpg" alt="Picture">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" value="Update" class="btn btn-primary">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if($user-> role == ('admin'))
                        <h5 class="text-center h5 mb-0">{{ old('name' , $user->name ) }}</h5>
                        <p class="text-center text-muted font-14">I'm excited to introduce our comprehensive web development program, designed to equip you with the essential skills and knowledge to build dynamic and engaging websites that make a lasting impact in the digital world.</p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                            <ul>
                                <li>
                                    <span>Email Address:</span>
                                    {{ old('name' , $user->email ) }}
                                </li>
                                <li>
                                    <span>Phone Number:</span>
                                    619-229-0054
                                </li>
                                <li>
                                    <span>Address:</span>
                                    1807 Holden Street<br>
                                    San Diego, CA 92115
                                </li>
                            </ul>
                        </div>

                        <div class="profile-social">
                            <h5 class="mb-20 h5 text-blue">Social Links</h5>
                            <ul class="clearfix">
                                <li><a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>

                        @elseif($user->role == ('student'))
                        <p class="text-center text-muted font-14">Norain binti Mohd Sulaiman</p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                            <ul>
                                <li>
                                    <span>Email Address:</span>
                                    {{ old('name' , $user->email ) }}
                                </li>
                                <li>
                                    <span>Bio:</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </li>
                                <li>
                                    <span>School:</span>
                                    SMK TAMAN UNIVERSITI 2<br>
                                    SKUDAI, JOHOR.
                                </li>
                            </ul>
                        </div>

                        <div class="profile-social">
                            <h5 class="mb-20 h5 text-blue">Social Links</h5>
                            <ul class="clearfix">
                                <li><a href="#" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        @endif

                        
                        <div class="profile-skills">
                            <h5 class="mb-20 h5 text-blue">Key Skills</h5>
                            <h6 class="mb-5 font-14">HTML</h6>
                            <div class="progress mb-20" style="height: 6px;">
                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="mb-5 font-14">Css</h6>
                            <div class="progress mb-20" style="height: 6px;">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="mb-5 font-14">jQuery</h6>
                            <div class="progress mb-20" style="height: 6px;">
                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="mb-5 font-14">Bootstrap</h6>
                            <div class="progress mb-20" style="height: 6px;">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
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
                                            <tr>
                                                <td>Full Name</td>
                                                <td>
                                                    <input type="text" name="name" value=" {{ old('name' , $user->fullname ) }}" class="form-control">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                
                                            <tr>
                                                <td>Nickname</td>
                                                <td>
                                                    <input type="text" name="name" value=" {{ old('name' , $user->nickname ) }}" class="form-control">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    <input type="text" name="email" value="{{ old('email' , $user->email ) }}" class="form-control">
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                     
                                            <tr>
                                                <td>Phone</td>
                                                <td>
                                                    <input type="text" name="phone" value="{{ old('phone' , $user->phone ) }}" class="form-control">
                                                    @error('phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <!-- Personal Details Student -->
                                            @if($user->role == 'student')
                                            <tr>
                                                <td>School</td>
                                                <td>
                                                    <input type="School" name="school"  class="form-control">
                                                    @error('school')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <!-- Fifth row-->
                                            <tr>
                                                <td>Bio</td>
                                                <td>
                                                    <input type="text" name="bio" value="" class="form-control">
                                                    @error('bio')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Date of Birth</td>
                                                <td>
                                                    <input type="" name="password" class="form-control">
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>
                                            @endif
<<<<<<< Updated upstream
                                        
=======
>>>>>>> Stashed changes
                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                    <input type="password" name="password" class="form-control">
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Confirm Password</td>
                                                <td>
                                                    <input type="password" name="password_confirmation"  class="form-control">
                                                    @error('password_confirmation')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </td>
                                            </tr>

                                            

                                            <!-- First row-->
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