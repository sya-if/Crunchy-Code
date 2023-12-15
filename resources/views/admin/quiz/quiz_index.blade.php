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

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Quiz List</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Quiz</li>
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
                        <a href="{{route('quizzes.create')}}" class="btn btn-info float-end">Add New Quiz</a>
                    </div>
                    <div class="pull-left">
                        <h4 class="text-blue h4">List of Quizzes</h4>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Chapter Number</th>
                            <th scope="col">Chapter Title</th>
                            <th scope="col" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($quizzes as $quiz)
                        <tr>
                            <td>{{$quiz->chapternumber}}</td>
                            <td>{{$quiz->chaptertitle}}</td>
                            <td><a href="{{route('quizzes.show', $quiz->chapternumber)}}" class="btn btn-info">Show</a></td>
                            <td><a href="{{route('quizzes.edit', $quiz->chapternumber)}}" class="btn btn-success">Edit</a></td>
                            <td>
                                <form method="POST" action="{{route('quizzes.destroy', $quiz->chapternumber)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure that you want to delete this?')" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Striped table End -->
        </div>
    </div>
</div>

@endsection