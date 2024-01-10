@extends('layouts.master')
@section('content')
<style>
    .color-options {
        display: flex;
    }

    .color-box {
        width: 30px;
        height: 30px;
        border: 1px solid #ccc;
        margin-right: 5px;
        cursor: pointer;
        display: inline-block;
    }

    /* Style the selected color box */
    .color-box:checked {
        border: 2px solid #333;
    }
</style>
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
                </div>
            </div>

            <div class="pd-20 card-box mb-30" style="width:100%">
                <div class="clearfix">
                    <h4 class="text-blue h4">Enroll New Module</h4>
                </div>
                <div class="wizard-content">
                    <form method="POST" action="{{ route('modules.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Select Color:</label>
                            <div class="color-options">
                                <input type="radio" id="color_20b2aa" name="color" value="#ffdbdb" checked>
                                <label for="color_20b2aa" class="color-box" style="background-color: #ffdbdb;"></label>

                                <input type="radio" id="color_ff0000" name="color" value="#ffcea5">
                                <label for="color_ff0000" class="color-box" style="background-color: #ffcea5;"></label>

                                <input type="radio" id="color_00ff00" name="color" value="#fff9d4">
                                <label for="color_00ff00" class="color-box" style="background-color: #fff9d4;"></label>

                                <input type="radio" id="color_0000ff" name="color" value="#d2fafd">
                                <label for="color_0000ff" class="color-box" style="background-color: #d2fafd;"></label>

                                <input type="radio" id="color_ffff00" name="color" value="#c9ffc7">
                                <label for="color_ffff00" class="color-box" style="background-color: #c9ffc7;"></label>

                                <input type="radio" id="color_ff00ff" name="color" value="#a6a6ee">
                                <label for="color_ff00ff" class="color-box" style="background-color: #a6a6ee;"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Please Choose What Module You Want To Add</label>
                            <div>
                                <div class="row justify-content-left">
                                    @foreach($moduleTitles as $title)
                                    <div class="col-md-4 col-sm-12 m-30">
                                    @if(in_array($title, $modules->where('user_id', $user->id)->pluck('title')->toArray()))
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