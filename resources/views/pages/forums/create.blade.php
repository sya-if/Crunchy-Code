@extends('layouts.master')

@section('content')
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
                                    <li class="breadcrumb-item active" aria-current="page">Create a Post</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <h4 class="text-blue h4">Create new post</h4>
                    </div>
                    <br>

                    <div class="wizard-content">
                        <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                            <input type="hidden" name="page_number" value="{{ $page }}">

                            <h5>Post Information</h5>

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
                                <button type="submit" class="btn btn-success" >Create Post</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
