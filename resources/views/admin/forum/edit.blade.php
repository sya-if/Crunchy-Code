@extends('layouts.master')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Edit Forum Information</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Forum Information</li>
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
                    <form  method="POST" action="{{route('forum.update', $forum)}}">
                        @csrf
                        @method('PUT')
                        <h5>Forum Information</h5>
                        <section>
                            <div class="row">
                                
                                <!-- Forum Title -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Forum Title :</label>
                                        <input type="text" class="form-control" name="forum-title" value="{{$forum->title}}" required>
                                    </div>
                                </div>
                                <!-- Forum Category -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="forum_category">Forum Category</label>
                                        <select name="forum_category" class="selectpicker form-control" data-size="5">
                                            <option value="Education" {{ $forum->category === 'Education' ? 'selected' : '' }}>Education</option>
                                            <option value="Career Path" {{ $forum->category === 'Career Path' ? 'selected' : '' }}>Career Path</option>
                                            <option value="Computer Science" {{ $forum->category === 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                                            <option value="Programming" {{ $forum->category === 'Programming' ? 'selected' : '' }}>Programming</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                
                                <!-- Forum Descriptions -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Forum Description :</label>
                                        <textarea class="form-control" name="forum-description" required>{{ $forum->description }}</textarea>

                                    </div>
                                </div>

                            </div>
                        </section>
                        
                        <div class="clearfix" style="display:flex; justify-content:center;">
                            <button type="submit" class="btn btn-success">Update Information</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection