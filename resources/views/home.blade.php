@extends('layouts.master')

@php($user = Auth::user())

@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Dashboard</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            January 2018
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Export List</a>
                            <a class="dropdown-item" href="#">Policies</a>
                            <a class="dropdown-item" href="#">View Assets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="vendors/images/banner-img.png" alt="">
                </div>
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Welcome back <div class="weight-600 font-30 text-blue">{{ old('name' , $user->nickname ) }}</div>
                    </h4>
                    <p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
                </div>
            </div>
        </div>
        <div class="row clearfix progress-box">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                <div class="card-box pd-30 height-100-p">
                    <div class="progress-box text-center">
                         <input type="text" class="knob dial1" value="80" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#1b00ff" data-angleOffset="180" readonly>
                        <h5 class="text-blue padding-top-10 h5">My Earnings</h5>
                        <span class="d-block">80% Average <i class="fa fa-line-chart text-blue"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                <div class="card-box pd-30 height-100-p">
                    <div class="progress-box text-center">
                         <input type="text" class="knob dial2" value="70" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00e091" data-angleOffset="180" readonly>
                        <h5 class="text-light-green padding-top-10 h5">Business Captured</h5>
                        <span class="d-block">75% Average <i class="fa text-light-green fa-line-chart"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                <div class="card-box pd-30 height-100-p">
                    <div class="progress-box text-center">
                         <input type="text" class="knob dial3" value="90" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#f56767" data-angleOffset="180" readonly>
                        <h5 class="text-light-orange padding-top-10 h5">Projects Speed</h5>
                        <span class="d-block">90% Average <i class="fa text-light-orange fa-line-chart"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                <div class="card-box pd-30 height-100-p">
                    <div class="progress-box text-center">
                         <input type="text" class="knob dial4" value="65" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#a683eb" data-angleOffset="180" readonly>
                        <h5 class="text-light-purple padding-top-10 h5">Panding Orders</h5>
                        <span class="d-block">65% Average <i class="fa text-light-purple fa-line-chart"></i></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- js --}}
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<script src="src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
<script src="src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="vendors/scripts/dashboard2.js"></script>

@endsection
