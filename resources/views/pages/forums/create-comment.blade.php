@extends('layouts.master')

@section('content')


<style>

    .attachment-button {
        display: inline-block;
        padding: 10px 15px;
        background-color: #3498db; /* Button background color */
        color: #fff; /* Button text color */
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    
    .attachment-button:hover {
        background-color: #2980b9; /* Button background color on hover */
    }
    
    
</style>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Post</h4>
                            </div>

                            <!-- Display any message based on the session (e.g., success message) -->
                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                    {{ Session::get('message') }}
                                </div>
                            @endif

                            <!-- Breadcrumb navigation -->
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Forum</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create a Comment</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Post that the user chose to reply -->
                <div class="pd-20 card-box mb-30">
                    <div class="row">
                        <!-- Post Title  -->
                        <div class="col-6"> 
                            <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">{{$post->title}}</a></h6>
                        </div>

                        <!-- Post Owner -->
                        <div class="col-6 text-right"> 
                            <p class="color-font" >by {{ $post->user->fullname}} at {{ $post->created_at }}</p>
                        </div>
                        
                    </div>

                    <div>
                        <!-- Post Description -->
                        <p class="text-secondary" style="padding-right: 40px; text-align:justify;">
                            {{ $post->desciption }}
                        </p>
                    </div>

                    <!-- Post Attachment -->
                    @if($post->photo)
                        <a href="{{ asset('uploads/posts/' . $post->photo) }}" target="_blank" class="attachment-button">
                            View Attachment
                        </a>
                    @endif
    
                </div>

                <!-- Container to add the informations of the comment -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <h4 class="text-blue h4">Reply to a post</h4>
                    </div>
                    <br>

                    <div class="wizard-content">
                        <form method="POST" action="{{route('comment.store')}}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <input type="hidden" name="page_number" value="{{ $page }}">
                            <input type="hidden" name="forum_id" value="{{ $post->forum_id }}">

                            <h5>Comment's Information</h5>

                            <br><br>
    
                            <section>
                                <!-- Title -->
                                <div class="form-group row">
                                    <label for="title" class="col-md-5 col-form-label">{{ __('Title') }}</label>
                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="form-group row">
                                    <label for="description" class="col-md-5 col-form-label">{{ __('Description') }}</label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" name="description" required></textarea>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Photo -->
                                <div class="form-group row">
                                    <label for="photo" class="col-md-5 col-form-label">{{ __('Photo') }}</label>
                                    <div class="col-md-6">

                                        <input type="file" name="attachment" accept="image/*">

                                    </div>
                                </div>

            
                            </section>
                            
                            <br><br>

                            <!-- Submit Button -->
                            <div class="clearfix" style="display:flex; justify-content:center;">
                                <button type="submit" class="btn btn-success" >Create a comment</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
