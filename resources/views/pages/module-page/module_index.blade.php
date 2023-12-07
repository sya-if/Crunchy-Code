@extends('layouts.master')

@php($user = Auth::user())

@section('content')


<div class="main-container">
    @if(session()->has('success'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <b>{{session()->get('success')}}</b>
    </div>
    @endif
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Module List</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Module</li>
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
            <!-- Striped table start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-right">
                        <a href="{{route('modules.create')}}" class="btn btn-info float-end">Enroll More Module</a>
                    </div>
                    <div class="pull-left">
                        <h4 class="text-blue h4">List of Module</h4>
                    </div>
                </div>
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
                                        <div class="mt-3">
                                            <a href="{{route('modules.edit', $module->id)}}" class="btn btn-sm btn-success mr-2">Edit</a>
                                            <form method="POST" action="{{route('modules.destroy', $module->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure that you want to delete this module?')" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
            <!-- Striped table End -->
        </div>
    </div>
</div>

@endsection