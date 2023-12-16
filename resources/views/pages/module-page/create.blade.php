@extends('layouts.master')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Enroll New Module</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Enroll New Module</li>
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

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <h4 class="text-blue h4">Enroll New Module</h4>
                </div>
                <div class="wizard-content">
                    <form method="POST" action="{{ route('modules.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Select Color:</label>
                            <input type="color" id="color" name="color" value="#20b2aa">
                        </div>
                        <div class="form-group">
                            <label>Please Choose What Module You Want To Add</label>
                            <div>
                                <div class="row justify-content-left">
                                    @foreach($moduleTitles as $title)
                                    <div class="col-md-4 col-sm-12 m-30">
                                        @if(in_array($title, $modules->pluck('title')->toArray()))
                                        <button type="button" class="btn btn-block btn-change" style="height: 100px;" disabled>
                                                {{ $title }} - Already Enrolled
                                        </button>
                                        @else
                                        <button type="submit" class="btn btn-block btn-change" style="height: 100px;" name="title" onclick="return confirm('Are you sure that you want to add {{ $title }}')" value="{{ $title }}">
                                            {{ $title }}
                                        </button>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .btn-change{
        background: lightseagreen;
        margin: 20px;
        float: left;
        box-shadow: 0 0 1px #ccc;
        -webkit-transition: all 0.5s ease-in-out;
        border: 0px;
        color: #fff;
    }
    .btn-change:hover{
        -webkit-transform: scale(1.1);
        background: #31708f;
    }
</style>
@endsection