@extends('layouts.master')

@php($user = Auth::user())

@section('content')

<style>
    table, tr,th,td{
        border: 1px solid #000;
    }
</style>
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
                            <h4>Quesion List</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('quizzes.index')}}">View Quiz</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Question</li>
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
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">

                <!-- Title-->
                <div class=" row pd-20">
                    <h4 class="text-blue h4">Question's List</h4>
                </div>

                <!-- Table -->
                <div class="pb-18">
                    <div class="table-responsive">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Question Text</th>
                                    <th>A</th>
                                    <th>B</th>
                                    <th>C</th>
                                    <th>D</th>
                                    <th>Answer</th>
                                    <th>Image</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($quiz->subquizzes as $subquiz)
                                <tr>
                                    <td class="table-plus">{{$subquiz->question_text}}</td>
                                    <td>{{$subquiz->answer_1}}</td>
                                    <td>{{$subquiz->answer_2}}</td>
                                    <td>{{$subquiz->answer_3}}</td>
                                    <td>{{$subquiz->answer_4}}</td>
                                    <td>{{$subquiz->answer}}</td>
                                    <td>
                                        <img src="{{ asset ('uploads/quizzes/'.$subquiz->photo)}}" style="width:100px;">
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
    
                                                <!-- Edit Question  -->
                                                <a href="{{ route('quizzes.editShow', ['quiz' => $quiz, $subquiz->id]) }}" class="dropdown-item"><i class="dw dw-edit2"></i>Edit</a>

    
                                                <!-- Delete Student Information -->
                                                <form method="POST" action="{{ route('quizzes.editShow', ['quiz' => $quiz, $subquiz->id]) }}" ">
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    @csrf
    
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure that you want to delete this user?')" class="dropdown-item"><i class="dw dw-delete-3"></i>Delete</button>
                                                </form>
    
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable End -->
    </div>
</div>

@endsection

             
          