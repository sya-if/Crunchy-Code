@extends('layouts.master')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Edit Quiz</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('quizzes.index')}}">View Quiz</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('quizzes.show', ['quiz' => $quiz->chapternumber]) }}">View Subquiz</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Subquiz</li>
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
                    <h4 class="text-blue h4">Edit Subquiz</h4>
                </div>
                <div class="wizard-content">
                    <form method="POST" action="{{ route('quizzes.updateShow', ['quiz' => $quiz->chapternumber, 'subquizId' => $subquiz->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <section>
                            <h5>SubChapter Info</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Question Text :</label>
                                        <textarea class="form-control" name="question_text" required>{{ $subquiz->question_text }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 1 :</label>
                                        <input type="text" class="form-control" name="answer_1" value="{{ $subquiz->answer_1 }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 2 :</label>
                                        <input type="text" class="form-control" name="answer_2" value="{{ $subquiz->answer_2 }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 3 :</label>
                                        <input type="text" class="form-control" name="answer_3" value="{{ $subquiz->answer_3 }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer 4 :</label>
                                        <input type="text" class="form-control" name="answer_4" value="{{ $subquiz->answer_4 }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Answer :</label>
                                        <input type="text" class="form-control" name="answer" value="{{ $subquiz->answer }}" required>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="clearfix" style="display:flex; justify-content:center;">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection