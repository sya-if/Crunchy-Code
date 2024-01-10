@extends('layouts.master')
@section('content')
<style>
    .required-asterisk {
        color: red;
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
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{ session('error') }}
    </div>
    @endif

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Edit Material</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('materials.index')}}">View Material</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Material</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <h4 class="text-blue h4">Edit Material</h4>
                </div>
                <div class="wizard-content">
                    <form method="POST" action="{{ route('materials.update', $material) }}">
                        @csrf
                        @method('PUT')
                        <p style="color: red">* Required</p>
                        <h5>Module Info</h5>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Chapter Number :<span class="required-asterisk">*</span></label>
                                        <input type="text" class="form-control" name="modulenumber" value="{{ $material->modulenumber }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Chapter Title :<span class="required-asterisk">*</span></label>
                                        <input type="text" class="form-control" name="moduletitle" value="{{ $material->moduletitle }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description :<span class="required-asterisk">*</span></label>
                                        <textarea class="form-control" name="description" required>{{ $material->description }}</textarea>
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