@extends('layouts.master')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Add New Forum</h4>
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
                    <h4 class="text-blue h4">Adding New Forum</h4>
                </div>
                <div class="wizard-content">
                    <form method="POST" action="{{route('forum.store')}}">
                        @csrf
                        <h5 class="mb-30">Forum Information</h5>
                        <section>
                            <div class="row">

                                <!-- Forum Title -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Forum Title :</label>
                                        <input type="text" class="form-control" name="forum-title" required>
                                    </div>
                                </div>
                                <!-- Forum Category -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="forum_category">Forum Category</label>
                                        <select name="forum_category" class="selectpicker form-control" data-size="5">
                                            <option value="Education">Education</option>
                                            <option value="Career Path">Career Path</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Programming">Programming</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <!-- Forum Descriptions -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Forum Description :</label>
                                        <textarea class="form-control" name="forum-description" required></textarea>
                                    </div>
                                </div>

                            </div>
                        </section>
                        
                        <div class="clearfix" style="display:flex; justify-content:center;">
                            <button type="submit" class="btn btn-success" >Create Forum</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-wrap pd-20 mb-20 card-box">
        Crunchy Code Web Application System developed by Elysium
    </div>

</div>
@endsection