@extends('layouts.master')

@php($user = Auth::user())
@php($modules = App\Models\Modules::orderBy('title', 'asc')->get())
@section('content')
<style>
.profile-picture-wrapper 
{
    overflow: hidden;
    border-radius: 50%;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Adjust the shadow as needed */
}

.profile-picture {
    width: 100%; /* Ensure the image fills the circular frame */
    border-radius: 50%; /* Ensure the image is circular */
}

</style>

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
            </div>
        </div>

        <!-- First Row - Welcome -->
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-3">

                    @if(isset($user->photo) && file_exists(public_path('uploads/users/' . $user->photo)))
                        <div class="profile-picture-wrapper">
                            <img src="{{ asset('uploads/users/' . $user->photo) }}" alt="Profile photo" class="profile-picture">
                        </div>
                    @else
                        <div class="profile-picture-wrapper">
                            <img src="{{ asset('vendors/images/default-admin-photo.png') }}" alt="Default Profile photo" class="profile-picture">
                        </div>
                    @endif


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
                @if($module->user_id == Auth::id())
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
                @endif
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
                        <div class="widget-data">
                            <div class="h4 mb-0">{{ $users->count() }}</div>
                            <div class="weight-600 font-14">Students</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="widget-data">
                            <div class="h4 mb-0">{{ $materials->count() }}</div>
                            <div class="weight-600 font-14">Modules</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="widget-data">
                            <div class="h4 mb-0">{{ $quizzes->count() }}</div>
                            <div class="weight-600 font-14">Quizzes</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="widget-data">
                            <div class="h4 mb-0">{{ $forums->count() }}</div>
                            <div class="weight-600 font-14">Forum</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Row 2 -->
        <div class="row">

            <div class="col-xl-8 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20" style="text-align: center">Students Registration Record in 2024</h2>
                    <div id="chart52"></div>


                </div>
            </div>

            <script>
                // Assuming $monthlyStudentCounts is an array containing monthly student counts
                var monthlyStudentCounts = {!! json_encode($monthlyStudentCounts) !!};
            
                // Extracting labels (months) and data (student counts) from the monthlyStudentCounts
                var months = [];
                var studentCounts = [];
            
                // Filter data for the year 2024
                Object.keys(monthlyStudentCounts).forEach(function(date) {
                    var [year, month] = date.split('-');
                    if (parseInt(year) === 2024) {
                        // Convert numeric month to month name
                        var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                        var monthName = monthNames[parseInt(month) - 1];
            
                        months.push(monthName);
                        studentCounts.push(monthlyStudentCounts[date]);
                    }
                });

                // Inline script to initialize the chart
                document.addEventListener("DOMContentLoaded", function () {
                    var options5 = {
                        series: [{
                            name: 'Students',
                            data: studentCounts
                        }],
                        chart: {
                            height: 350,
                            type: 'bar',
                            toolbar: {
                                show: false,
                            }
                        },
                        plotOptions: {
                            bar: {
                                columnWidth: '50%',
                                distributed: true
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        xaxis: {
                            categories: months,
                            labels: {
                                show: true
                            }
                        },
                        yaxis: {
                            title: {
                                text: 'Number of Students'
                            }
                        }
                    };
            
                    var chart52 = new ApexCharts(document.querySelector("#chart52"), options5);
                    chart52.render();
                });
            </script>
            
            <div class="col-xl-4 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Distribution of Forums, Quizzes, and Materials</h2>
                    <div id="chartContainer"></div>
                </div>
            </div>

            <script>
                // Sample data (replace with your actual data)
                var forumsCount = {{ $forums->count() ?? 0 }};
                var quizzesCount = {{ $quizzes->count() ?? 0 }};
                var materialsCount = {{ $materials->count() ?? 0 }};
            
                // Data for the pie chart
                var chartData = {
                    series: [forumsCount, quizzesCount, materialsCount],
                    labels: ["Forums", "Quizzes", "Materials"]
                };
            
                // Options for the pie chart
                var chartOptions = {
                    chart: {
                        type: 'donut',
                    },
                    labels: chartData.labels,
                    series: chartData.series,
                    colors: ["#FF6384", "#36A2EB", "#FFCE56"],
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }],
                    plotOptions: {
                        pie: {
                            customScale: 0.8, // Adjust this value to control the size of the donut chart
                            donut: {
                                size: '70%',
                                labels: {
                                    show: true,
                                    total: {
                                        show: true,
                                        label: 'Total',
                                        formatter: function (w) {
                                            return chartData.series.reduce((a, b) => a + b, 0);
                                        }
                                    }
                                }
                            }
                        }
                    }
                };
            
                // Initialize ApexCharts and render the chart
                document.addEventListener("DOMContentLoaded", function () {
                    var chart = new ApexCharts(document.getElementById('chartContainer'), chartOptions);
                    chart.render();
                });
            </script>
            
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



@endsection
