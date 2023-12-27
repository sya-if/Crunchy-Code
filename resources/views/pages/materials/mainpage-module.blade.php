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

.btn-outline-success {
    color: #28a745;
    border-color: #28a745;
}

.btn-outline-secondary {
    color: #6c757d;
    border-color: #6c757d;
}

</style>

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
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-list">
                                <ul>
                                    @foreach ($materials as $material)
                                        <li>
                                            <!-- Your existing content for each module -->
                                            <div class="row no-gutters">
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                    <div class="blog-img">
                                                        <img src="vendors/images/bab-1.png" alt="" class="bg_img">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-12 col-sm-12">
                                                    <div class="blog-caption">
                                                        <h4><a href="#">BAB {{$material->modulenumber}} {{$material->moduletitle}} </a></h4>
                                                        <div class="blog-by">
                                                            <p align="justify">
                                                                {{$material->description}}
                                                            </p>
                                                            <div class="pt-10">
                                                                <!-- Modal Button -->
                                                                <button class="button-85" role="button" data-toggle="modal" data-target="#myModal-{{$material->modulenumber}}">Tekan sini</button>
                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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

                                                                <div class="row">
                                                                    <div class="col-md-9"> <!-- Adjust the column width based on your layout -->
                                                                        <a class="button-85 btn-block mb-4" role="button" href="{{ route('module.page', ['module' => $submaterial->subchapternumber]) }}">
                                                                            Module {{$submaterial->subchapternumber}} {{$submaterial->subchaptertitle}}
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-md-3"> <!-- Adjust the column width based on your layout -->
                                                                        <!-- Mark As Done -->
                                                                        @if($submaterial->status == "0")
                                                                            <button class="markAsDoneButton btn btn-outline-success btn-sm text-nowrap" data-submodule="{{ $submaterial->id }}">
                                                                                Mark as done
                                                                            </button>
                                                                        @else
                                                                            <button class="markAsDoneButton btn btn-outline-secondary btn-sm text-nowrap" data-submodule="{{ $submaterial->id }}" disabled>
                                                                                Already done
                                                                            </button>
                                                                        @endif
                                                                        
                                                                    </div>

                                                                    <script>
                                                                        $(document).ready(function () {
                                                                            $('.markAsDoneButton').on('click', function () {
                                                                                var button = $(this);
                                                                                var submoduleId = button.data('submodule');

                                                                                $.ajax({
                                                                                    url: '/submaterials/' + submoduleId,
                                                                                    type: 'PATCH',
                                                                                    success: function (response) {
                                                                                        // Update the button color based on the status
                                                                                        if (response.status === 0) {
                                                                                            button.removeClass('btn-outline-secondary').addClass('btn-outline-success').removeAttr('disabled');
                                                                                        } else {
                                                                                            button.removeClass('btn-outline-success').addClass('btn-outline-secondary').attr('disabled', 'disabled');
                                                                                        }

                                                                                        // Perform any other necessary actions
                                                                                        alert(response.message);
                                                                                    },
                                                                                    error: function (error) {
                                                                                        alert('Error updating status: ' + error.statusText);
                                                                                    }
                                                                                });
                                                                            });
                                                                        });
                                                                    </script>
                                                                    
                                                                </div>

                                                                @else
                                                                    <p>No submaterials available for this module.</p>
                                                                @endif   

                                                            @endforeach
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

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