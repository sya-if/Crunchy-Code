@extends('layouts.master')

@php($user = Auth::user())

@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Add New Quiz</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Quiz</li>
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
                    <h4 class="text-blue h4">Adding New Quiz</h4>
                </div>
                <div class="wizard-content">
                    <form method="POST" action="{{route('quizzes.store')}}" enctype="multipart/form-data">
                        @csrf
                        <h5>Quiz Info</h5>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Chapter Number :</label>
                                        <input type="text" class="form-control" name="chapternumber" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Chapter Title :</label>
                                        <input type="text" class="form-control" name="chaptertitle" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label >Description :</label>
                                        <textarea class="form-control" name="description" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h5>Question Info</h5>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Question Text :</label>
                                        <textarea class="form-control" name="question_text" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="file" name="photo" class="form-control">
                                        @error('photo')
                                            <span class="text-danger">{{ $message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer A:</label>
                                        <input type="text" class="form-control" name="answer_1"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer B :</label>
                                        <input type="text" class="form-control" name="answer_2" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer C :</label>
                                        <input type="text" class="form-control" name="answer_3" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer D :</label>
                                        <input type="text" class="form-control" name="answer_4" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Correct Answer :</label>
                                        <input type="text" class="form-control" name="answer" required>
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Content (Blade File):</label>
                                        <input type="file" class="form-control" name="content" accept=".blade.php" required>
                                    </div>
                                </div> --}}
                            </div>
                        </section>
                        <div class="clearfix" style="display:flex; justify-content:center;">
                            <button type="submit" class="btn btn-success" >Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection