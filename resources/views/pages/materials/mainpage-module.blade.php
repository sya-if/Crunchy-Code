@extends('layouts.master')

@php($user = Auth::user())

@section('content')


<style>

/* CSS */
.button-85 {
  padding: 0.6em 2em;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background: #111;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-85:before {
  content: "";
  background: linear-gradient(
    45deg,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-button-85 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.button-85:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #222;
  left: 0;
  top: 0;
  border-radius: 10px;
}


.btn-block-width 
{
    width:83% !important;
}



@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

* {
	box-sizing: border-box;
}

.courses-container {
	
}

.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px;
	overflow: hidden;
	width: 95%;
}

.course h6 {
  color: #fff !important;
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h2 {
  color: #fff !important;
	letter-spacing: 1px;
	margin: 10px 0;
}

.course-preview {
	background-color: #2A265F;
	color: #fff;
	padding: 20px;
	max-width: 300px;
}

.course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 30px;
	text-decoration: none;
}

.course-info {
	padding: 30px;
	position: relative;
	width: 100%;
}

.progress-container {
	position: absolute;
	top: 30px;
	right: 30px;
	text-align: right;
	width: 150px;
}

.progress {
	background-color: #ddd;
	border-radius: 3px;
	height: 5px;
	width: 100%;
}

.progress::after {
	border-radius: 3px;
	background-color: #2A265F;
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 5px;
	width: 66%;
}

.progress-text {
	font-size: 10px;
	opacity: 0.6;
	letter-spacing: 1px;
}

.btn {
	background-color: #2A265F;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	position: absolute;
	bottom: 30px;
	right: 30px;
	letter-spacing: 1px;
}

.btn-outline-success {
    color: #28a745;
    border-color: #28a745;
}

.btn-outline-secondary {
    color: #6c757d;
    border-color: #6c757d;
}

</style>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    var totalModules = 3; // Set the total number of modules
    var moduleSubmodules = {
        'module1': 7,
        'module2': 4,
        'module3': 2
    };
    var currentProgress = {}; // Initialize the current progress object

    // Initialize currentProgress object with default values
    for (var i = 1; i <= totalModules; i++) {
        currentProgress['module' + i] = 0;
    }

    $(document).ready(function () {
        $('.mark-as-done-button').click(function () {
            var module = $(this).data('module');
            var submodule = $(this).data('submodule');
            var progressKey = 'module_' + module + '_submodule_' + submodule + '_progress';

            // Toggle the class to change the button color
            $(this).toggleClass('btn-outline-success btn-danger');

            // Change the button text based on the state
            var buttonText = $(this).hasClass('btn-outline-success') ? 'Mark as done' : 'Done';
            $(this).text(buttonText);

            // Update the progress
            var submoduleProgress = buttonText === 'Done' ? 1 : -1;
            currentProgress[module] += submoduleProgress;
            localStorage.setItem(progressKey, submoduleProgress);

            // Update the UI with the new progress
            updateProgressUI();
        });

        $('#myModal-1, #myModal-2, #myModal-3').on('hidden.bs.modal', function () {
            // Reverse the progress when the modal is closed
            for (var i = 1; i <= totalModules; i++) {
                currentProgress['module' + i] = 0;
                for (var j = 1; j <= moduleSubmodules['module' + i]; j++) {
                    currentProgress['module' + i] += parseInt(localStorage.getItem('module_' + i + '_submodule_' + j + '_progress')) || 0;
                }
            }
            updateProgressUI();
        });

        // Function to update the UI with the new progress
        function updateProgressUI() {
            var averageProgress = 0;

            // Calculate average progress for all modules
            for (var i = 1; i <= totalModules; i++) {
                var moduleProgress = moduleSubmodules['module' + i] > 0 ? Math.round((currentProgress['module' + i] / moduleSubmodules['module' + i]) * 100) : 0;
                averageProgress += moduleProgress;
                // Display the total progress for each module in the corresponding span element
                $('#progressLabel' + i).text('Progress: ' + moduleProgress + '%');
                // Update the progress bar for each module
                $('#progressBar' + i).css('width', moduleProgress + '%');
                $('#progressBar' + i).attr('aria-valuenow', moduleProgress);
            }

            // Calculate average progress for all modules
            averageProgress = totalModules > 0 ? Math.round((averageProgress / totalModules)) : 0;
            // Display the total progress for all modules in the corresponding span element
            $('#progressLabel').text('Total Progress: ' + averageProgress + '%');
            // Update the total progress bar
            $('#totalProgressBar').css('width', averageProgress + '%');
            $('#totalProgressBar').attr('aria-valuenow', averageProgress);
        }
    });

</script>

<div class="main-container">
    <div class="pd-ltr-20 height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Modul Pembelajaran Sains Komputer Tingkatan 4</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Module</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>


            @foreach($materials as $material)
                <div class="courses-container">
                    <div class="course">
                        <div class="course-preview col-md-4">
                            <h6>Module</h6>
                            <h2>{{ $material->modulenumber }}</h2>
                            <h4 style="color: #fff">{{ $material->moduletitle }}</h4>
                            
                        </div>

                        <div class="course-info">
                            <h5 style="margin-bottom: 10px;">Penerangan</h5>
                            <p>{{ $material->description }}</p>
                            <div class="pt-10 pull-right">
                                <!-- Modal Button -->
                                <button class="button-85" role="button" data-toggle="modal" data-target="#myModal-{{$material->modulenumber}}">Tekan sini</button>
                            </div>
                            <!-- Modal that will display when clicked -->
                            <div class="modal fade" id="myModal-{{$material->modulenumber}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Sub Bab {{$material->modulenumber}}</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body justify-content">
                                            @foreach ($material->submaterials as $submaterial)
                                                 @if ($submaterial->modulenumber == $material->modulenumber)    
                                                <!-- Replace the content below with your specific modal content -->
                                                    <a class="button-85 btn-block mb-4" role="button" href="{{ route('module.page', ['module' => $submaterial->subchapternumber]) }}">Module {{$submaterial->subchapternumber}} {{$submaterial->subchaptertitle}}</a>
                                                @else
                                                    <p>No submaterials available for this module.</p>
                                                @endif   
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



            
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            Crunchy Code Web Application System developed by Elysium
        </div>
    </div>
</div>
@endsection