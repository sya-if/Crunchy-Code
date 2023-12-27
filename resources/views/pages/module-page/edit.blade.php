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
                            <h4>Edit Quiz</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Quiz</li>
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
                    <h4 class="text-blue h4">Edit Color for {{$module->title}}</h4>
                </div>
                <div class="wizard-content">
                    <form method="POST" action="{{route('modules.update', $module)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Select Color:</label>
                            <div class="color-options">
                                <input type="radio" id="color_20b2aa" name="color" value="#20b2aa" checked>
                                <label for="color_20b2aa" class="color-box" style="background-color: #20b2aa;"></label>

                                <input type="radio" id="color_ff0000" name="color" value="#ff0000">
                                <label for="color_ff0000" class="color-box" style="background-color: #ff0000;"></label>

                                <input type="radio" id="color_00ff00" name="color" value="#00ff00">
                                <label for="color_00ff00" class="color-box" style="background-color: #00ff00;"></label>

                                <input type="radio" id="color_0000ff" name="color" value="#0000ff">
                                <label for="color_0000ff" class="color-box" style="background-color: #0000ff;"></label>

                                <input type="radio" id="color_ffff00" name="color" value="#ffff00">
                                <label for="color_ffff00" class="color-box" style="background-color: #ffff00;"></label>

                                <input type="radio" id="color_ff00ff" name="color" value="#ff00ff">
                                <label for="color_ff00ff" class="color-box" style="background-color: #ff00ff;"></label>
                            </div>
                        </div>
                        <div class="clearfix" style="display:flex; justify-content:center;">
                            <button type="submit" class="btn btn-success" >Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection