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
                            <h4>Add New Material</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Material</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <h4 class="text-blue h4">Adding New Material</h4>
                </div>
                <div class="wizard-content">
                    <form method="POST" action="{{route('materials.store')}}" enctype="multipart/form-data">
                        @csrf
                        <h5>Module Info</h5>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Chapter Number :</label>
                                        <input type="text" class="form-control" name="modulenumber" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Chapter Title :</label>
                                        <input type="text" class="form-control" name="moduletitle" required>
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
                        <h5>SubModule Info</h5>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subchapter Number :</label>
                                        <input type="text" class="form-control" name="subchapternumber" placeholder="Format: 0-0" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subchapter Title :</label>
                                        <input type="text" class="form-control" name="subchaptertitle" required>
                                    </div>
                                </div>
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