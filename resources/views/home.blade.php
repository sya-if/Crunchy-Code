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

        <!-- First Row - Welcome -->
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <img src="vendors/images/photo1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Welcome back <div class="weight-600 font-30 text-blue">{{ old('name' , $user->nickname ) }}</div>
                    </h4>
                    <p class="font-17 max-width-1000">Welcome to the Crunchy Code Web Application System, your gateway to mastering computer science with ease! Get ready to embark on a knowledge-rich journey as you explore the world of coding and computer science.</p>
                </div>
            </div>
        </div>

        <!-- Student Dashboard -->
        @if($user->role=='student')

        <!-- Second Row - Progress -->
        <h2>Progress</h2>
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

        <!-- Third Row - Recommended COurse -->
        <h2>Recommended Courses<h2>
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="row clearfix progress-box">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Module 5</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Subscribe This Course</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Module 6</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Subscribe This Course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Forth Row - Announcements -->
        <h2>Latest Announcements</h2>
        <div class="card-box pd-20 pb-30 height-100-p mb-30">
            <div class="row align-items-center">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="vendors/images/img1.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="color-white">First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="color-white">Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="vendors/images/img2.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="color-white">Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- End Student Dashboard -->
        @endif


        <!-- Admin Dashboard -->
        @if($user->role =='admin')

        <!-- System Summary -->
        <div class="row justify-content-center" >

            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart2"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">10</div>
                            <div class="weight-600 font-14">Students</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart3"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">3</div>
                            <div class="weight-600 font-14">Modules</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart4"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">10</div>
                            <div class="weight-600 font-14">Quizzes</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Row 2 -->
        <div class="row">
            <!-- Student Table -->
            <div class="col-lg-8 col-md-6 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p">
                    <h4 class="mb-20 h4">Student List</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=0)
                            @foreach ($users as $user)
                                @if($user->role == 'student')
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $user->fullname }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        
            <!-- Forum List -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p">
                    <h4 class="mb-20 h4">Community List</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        

        <!-- End Admin Dashboard -->
        @endif


    </div>
</div>

{{-- js --}}
<!-- <script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<script src="src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
<script src="src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
<script src="src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
<script src="src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<script src="vendors/scripts/dashboard2.js"></script>

@endsection
