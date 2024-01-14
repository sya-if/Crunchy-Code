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


/* CSS */
.button-34 {
  background: #5E5DF0;
  border-radius: 999px;
  box-shadow: #5E5DF0 0 10px 20px -10px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
  opacity: 1;
  outline: 0 solid transparent;
  padding: 8px 18px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: fit-content;
  word-break: break-word;
  border: 0;
}

.button-35 {
  background: #30aed7;
  border-radius: 999px;
  box-shadow: #2ed7f9 0 10px 20px -10px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
  opacity: 1;
  outline: 0 solid transparent;
  padding: 8px 18px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: fit-content;
  word-break: break-word;
  border: 0;
}
</style>

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
    
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

        <div class="row justify-content-center">
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="pd-20 mb-30">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>My Modules</h4>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <a href="{{ route('modules.create') }}" class="btn button-34" style="margin:10px;">Enroll More Module</a>
                            <a href="{{ route('modules.index') }}" class="btn button-35" style="margin: 10px;">Manage Module</a>
                        </div>
                    </div>

                    <div class="row">
                        @forelse($modules as $module)
                        @if($module->user_id == Auth::id())
                        <div class="col-md-4 col-sm-12 mb-30 position-relative">
                            <div class="card-box pd-30 height-100-p" style="background-color: {{$module->color}}">
                                <div class="progress-box text-center">
                                    <div class="button-group">
                                        <a href="{{ route('module.page', ['module' => $module->link]) }}">
                                         
                                            <span class="micon dw dw-book1 fa-2x"></span>
                                            <h5 class="padding-top-10 h5" style="color: #000"> {{$module->title}}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @empty
                            <div class="col-md-12">
                                <p style="text-align: center">You did not select any modules</p>
                            </div>
                        @endforelse

                    </div>
                    

                </div>
            </div>
        </div>
        

        <div>
            <!-- Forth Row - Announcements -->
            <div class="row justify-content-center">
                <div class="card-box pd-20 height-100-p mb-30">
                <div class="pd-20 mb-30">
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
                                    <img class="d-block w-120 mx-auto" src="vendors/images/banner1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-120 mx-auto" src="vendors/images/banner2.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-120 mx-auto" src="vendors/images/banner3.png" alt="Third slide">
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

        <div class="footer-wrap pd-20 mb-20 card-box">
            Crunchy Code Web Application System developed by Elysium
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
                    <h2 class="h4 mb-20" style="text-align: center">Distribution of Forums, Quizzes, and Materials</h2>
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
