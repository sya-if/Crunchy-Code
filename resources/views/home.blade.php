@extends('layouts.master')

@php($user = Auth::user())
@php($modules = App\Models\Modules::all())
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
                    <img src="{{ asset ('uploads/users/'.$user->photo)}}" alt="Profile photo">
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
        <div class="container">
            <div class="row justify-content-left">
                @foreach($modules as $module)
                <div class="col-md-4 col-sm-12 mb-30 position-relative">
                    <div class="card-box pd-30 height-100-p" style="background-color: {{$module->color}}">
                        <div class="progress-box text-center">
                            <div class="button-group">
                                <a href="{{ route('module.page', ['module' => $module->link]) }}">
                                    <input type="text" class="knob dial2" value="70" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00f" data-angleOffset="180" readonly>
                                    <h5 class="padding-top-10 h5" style="color: #000"> {{$module->title}}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="row justify-content-right">
                    <table class="m-0 p-0" style="width: 100%;">
                        <tr>
                            <td>
                                <a href="{{ route('modules.create') }}" class="btn btn-info float-end" style="margin:10px;">Enroll More Module</a>
                                <a href="{{ route('modules.index') }}" class="btn btn-success float-end" style="margin: 10px;">Manage Module</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="progress" id="progress-bar">
    <div class="progress-bar" role="progressbar" aria-valuenow="54" style="width: 54%" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- Forth Row - Announcements -->
        <div class="row justify-content-center">
            <div class="card-box pd-20 height-100-p mb-30">
            <div class="col-md-11 pd-20 mb-30">
                <h4>Announcements</h4><br>
                <div class="row justify-content-center">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-75 mx-auto" src="vendors/images/img1.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="color-white">First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-75 mx-auto" src="vendors/images/img3.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="color-white">Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-75 mx-auto" src="vendors/images/img2.jpg" alt="Third slide">
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
                            <div id="chart"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">10</div>
                            <div class="weight-600 font-14">Quizzes</div>
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
                            <div class="weight-600 font-14">Forum</div>
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
                        <li class="list-group-item">SMK Batu Pahat</li>
                        <li class="list-group-item">Universiti Teknologi Malaysia</li>
                        <li class="list-group-item">Fakulti Komputeran</li>
                        <li class="list-group-item">Public</li>
                        <li class="list-group-item">Private</li>
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
