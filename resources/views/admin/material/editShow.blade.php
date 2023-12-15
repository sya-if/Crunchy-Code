@extends('layouts.master')
@section('content')
<div class="main-container">
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
                                <li class="breadcrumb-item"><a href="{{ route('materials.show', ['material' => $material->modulenumber]) }}">View SubMaterial</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit SubMaterial</li>
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
                    <h4 class="text-blue h4">Edit SubMaterial</h4>
                </div>
                <div class="wizard-content">
                    <form method="POST" action="{{ route('materials.updateShow', ['material' => $material->modulenumber]) }}">
                        @csrf
                        @method('PUT')
                        <section>
                            <h5>SubModule Info</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subchapter Number :</label>
                                        <input type="text" class="form-control" name="subchapternumber" value="{{ optional($material->submaterials->first())->subchapternumber }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subchapter Title :</label>
                                        <input type="text" class="form-control" name="subchaptertitle" value="{{ optional($material->submaterials->first())->subchaptertitle }}" required>
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