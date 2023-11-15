@extends('layouts.master')

@php($user = Auth::user())

@section('content')

    <div class="main-container">
        <div class="pd-ltr-20 height-100-p xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Blog</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="container pd-0">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="blog-list">
                                    <ul>
                                        <li>
                                            <div class="row no-gutters">
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                    <div class="blog-img">
                                                        <img src="vendors/images/img2.jpg" alt="" class="bg_img">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-12 col-sm-12">
                                                    <div class="blog-caption">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                                        <div class="blog-by">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                                            <div class="pt-10">
                                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row no-gutters">
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                    <div class="blog-img">
                                                        <img src="vendors/images/img3.jpg" alt="" class="bg_img">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-12 col-sm-12">
                                                    <div class="blog-caption">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                                        <div class="blog-by">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                                            <div class="pt-10">
                                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row no-gutters">
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                    <div class="blog-img">
                                                        <img src="vendors/images/img4.jpg" alt="" class="bg_img">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-12 col-sm-12">
                                                    <div class="blog-caption">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                                        <div class="blog-by">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                                            <div class="pt-10">
                                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row no-gutters">
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                    <div class="blog-img">
                                                        <img src="vendors/images/img5.jpg" alt="" class="bg_img">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-12 col-sm-12">
                                                    <div class="blog-caption">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                                        <div class="blog-by">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                                            <div class="pt-10">
                                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

@endsection