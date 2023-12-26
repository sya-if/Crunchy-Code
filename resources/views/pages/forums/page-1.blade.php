@extends('layouts.master')

@php($user = Auth::user())

@section('content')
<style>
body
{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.inner-wrapper 
{
    position: relative;
    height: calc(100vh - 3.5rem);
    transition: transform 0.3s;
}
@media (min-width: 992px) {
    .sticky-navbar .inner-wrapper {
        height: calc(100vh - 3.5rem - 48px);
    }
}

.inner-main,
.inner-sidebar {
    position: absolute;
    top: 0;
    bottom: 0;
    display: flex;
    flex-direction: column;
}
.inner-sidebar {
    left: 0;
    width: 235px;
    border-right: 1px solid #cbd5e0;
    background-color: #fff;
    z-index: 1;
}
.inner-main {
    right: 0;
    left: 235px;
}
.inner-main-footer,
.inner-main-header,
.inner-sidebar-footer,
.inner-sidebar-header {
    height: 3.5rem;
    border-bottom: 1px solid #cbd5e0;
    display: flex;
    align-items: center;
    padding: 0 1rem;
    flex-shrink: 0;
}
.inner-main-body,
.inner-sidebar-body {
    padding: 1rem;
    overflow-y: auto;
    position: relative;
    flex: 1 1 auto;
}
.inner-main-body .sticky-top,
.inner-sidebar-body .sticky-top {
    z-index: 999;
}
.inner-main-footer,
.inner-main-header {
    background-color: #fff;
}
.inner-main-footer,
.inner-sidebar-footer {
    border-top: 1px solid #cbd5e0;
    border-bottom: 0;
    height: auto;
    min-height: 3.5rem;
}
@media (max-width: 767.98px) {
    .inner-sidebar {
        left: -235px;
    }
    .inner-main {
        left: 0;
    }
    .inner-expand .main-body {
        overflow: hidden;
    }
    .inner-expand .inner-wrapper {
        transform: translate3d(235px, 0, 0);
    }
}

.nav .show>.nav-link.nav-link-faded, .nav-link.nav-link-faded.active, .nav-link.nav-link-faded:active, .nav-pills .nav-link.nav-link-faded.active, .navbar-nav .show>.nav-link.nav-link-faded {
    color: #3367b5;
    background-color: #c9d8f0;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link 
{
    color: #fff;
    background-color: #467bcb;
}
.nav-link.has-icon 
{
    display: flex;
    align-items: center;
}
.nav-link.active 
{
    color: #467bcb;
}
.nav-pills .nav-link 
{
    border-radius: .25rem;
}
.nav-link 
{
    color: #4a5568;
}
.card 
{
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card 
{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body 
{
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.color-box
{
    background-color: #EDB7ED !important;
}

.color-font
{
    color: #BEADFA !important;

}

.img-sm {
    width: 46px;
    height: 46px;
}

.panel {
    box-shadow: 0 2px 0 rgba(0,0,0,0.075);
    border-radius: 0;
    border: 0;
    margin-bottom: 15px;
}

.panel .panel-footer, .panel>:last-child {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.panel .panel-heading, .panel>:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.panel-body {
    padding: 25px 20px;
}


.media-block .media-left {
    display: block;
    float: left
}

.media-block .media-right {
    float: right
}

.media-block .media-body {
    display: block;
    overflow: hidden;
    width: auto
}

.middle .media-left,
.middle .media-right,
.middle .media-body {
    vertical-align: middle
}

.thumbnail {
    border-radius: 0;
    border-color: #e9e9e9
}

.tag.tag-sm, .btn-group-sm>.tag {
    padding: 5px 10px;
}

.tag:not(.label) {
    background-color: #fff;
    padding: 6px 12px;
    border-radius: 2px;
    border: 1px solid #cdd6e1;
    font-size: 12px;
    line-height: 1.42857;
    vertical-align: middle;
    -webkit-transition: all .15s;
    transition: all .15s;
}
.text-muted, a.text-muted:hover, a.text-muted:focus {
    color: #acacac;
}
.text-sm {
    font-size: 0.9em;
}
.text-5x, .text-4x, .text-5x, .text-2x, .text-lg, .text-sm, .text-xs {
    line-height: 1.25;
}

.btn-trans {
    background-color: transparent;
    border-color: transparent;
    color: #929292;
}

.btn-icon {
    padding-left: 9px;
    padding-right: 9px;
}

.btn-sm, .btn-group-sm>.btn, .btn-icon.btn-sm {
    padding: 5px 10px !important;
}

.mar-top {
    margin-top: 15px;
}

hr.new1 {
  border-top: 1px solid rgb(0, 128, 255);
}


</style>



<div class="main-container">

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Forum</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url('/module')}}">Forum</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $forum->title }}</li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div>
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            
                            <div class="card-box blog-caption mb-20 shadow-box colour-box color-box" style="padding:30px;" align="center">
                                <h3> {{ $forum->title }} </h3>
                            </div>

                            <!-- Display any message based on the session (e.g., success message) -->
                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                            
                            <div class="inner-sidebar-header justify-content-end">
                                <form method="GET" action="{{ route('post.create', ['forum_id' => $forum->id, 'page_number' => 1]) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Create a Discussion</button>
                                </form>
                            </div>
                            

                            <!-- Inner main -->
                            <div class="container">
                                <!-- Forum List -->
                                <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                                    
                                    @forelse($posts as $post)
                                    
                                        <div class="card mb-2">
                                            <div class="card-body p-2 p-sm-3">
                                                <div class="media forum-item">

                                                    <!-- Profile Picture --->
                                                    <a href="#" data-toggle="collapse" data-target=".forum-content">
                                                        <img src="{{ asset ('uploads/users/'.$post->user->photo)}}" class="mr-3 rounded-circle" width="50" alt="User" />
                                                    </a>

                                                    <div class="media-body">
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

                                                        <div class="row">
                                                            <div class="row justify-content-end">
                                                                <!-- Edit -->
                                                                @if(auth()->user() && auth()->user()->id == $post->user_id)
                                                                    <div class="col-2 text-right">
                                                                        <!-- Edit Post Information -->
                                                                        <form action="{{ route('post.edit', $post) }}" method="POST">
                                                                            @csrf
                                                                            @method('GET')
                                                                            <input type="hidden" name="page_number" value="1">
                                                                            <button type="submit" class="btn btn-success">Edit</button>
                                                                        </form>
                                                                    </div>
                                                                @endif
                                                        
                                                                <!-- Delete -->
                                                                @if(auth()->user() && auth()->user()->id == $post->user_id)
                                                                    <div class="col-2 text-right">
                                                                        <!-- Delete Post Information -->
                                                                        <form method="POST" action="{{ route('post.destroy', $post->id) }}" style="display: inline;">
                                                                            <input type="hidden" name="_method" value="DELETE" />
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <input type="hidden" name="page_number" value="1">
                                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                @endif
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
                                                            <img src="{{ asset('uploads/posts/' . $post->photo) }}" style="width:auto;">
                                                        @endif
                                                        
                                                        <form method="GET" action="{{ route('comment.create', ['post_id' => $post->id, 'page_number' => 1]) }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success">Post Comment</button>
                                                        </form>

                                                        <br><br>

                                                         <!-- Comments -->
                                                        <div class="comments-container">

                                                            @foreach($post->comments as $comment)
                                                            <div class="media-block">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <!-- Horizontal Line -->
                                                                        <hr class="new1">
                                                                    </div>
                                                            
                                                                    <div class="col-md-1">
                                                                        <!-- Profile Picture -->
                                                                        <img src="{{ asset('uploads/users/'.$comment->user->photo) }}" class="mr-3 rounded-circle" width="50" alt="User" />
                                                                    </div>
                                                            
                                                                    <div class="col-md-6">
                                                                        <!-- Comment Title -->
                                                                        <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">{{ $comment->title }}</a></h6>
                                                                        <!-- Comment Owner -->
                                                                        <p class="color-font">by {{ $comment->user->fullname }} at {{ $comment->created_at }}</p>
                                                                    </div>
                                                            
                                                                    <div class="col-md-3">
                                                                       
                                                                    </div>

                                                                    <div class="col-md-2">
                                                                         <!-- Edit -->
                                                                         @if(auth()->user() && auth()->user()->id == $comment->user_id)

                                                                         <div class="col-2 text-right">
                                                                             <!-- Edit Comment Information -->
                                                                             <form action="{{ route('comment.edit', $comment) }}" method="POST">
                                                                                 @csrf
                                                                                 @method('GET')
                                                                                 <input type="hidden" name="page_number" value="1">
                                                                                 <button type="submit" class="btn btn-sm btn-success">
                                                                                     <i class="fas fa-edit"></i> 
                                                                                 </button>
                                                                             </form>
                                                                         </div>
                                                                     @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        
                                                                <div class="media-body">
                                                                    <!-- Comment content -->
                                                                    <div class="pad-ver">
                                                                        <!-- Description -->
                                                                        <p class="text-secondary" style="padding-right: 40px; text-align:justify;">
                                                                            {{ $comment->description }}
                                                                        </p>
                                                                    </div>

                                                                    <!-- Post Attachment -->
                                                                    @if($comment->photo)
                                                                        <a href="{{ asset('uploads/comments/' . $comment->photo) }}" target="_blank" class="btn btn-info attachment-button">
                                                                            View Attachment
                                                                        </a>
                                                                    @endif
                                                                
                                                                    <hr>
                                                                </div>
                                                        
                                                                
                                                            </div>
                                                            @endforeach

                                                        </div>
                                                        
                                                        <button class="btn btn-warning comment-toggle" style="cursor: pointer;">Show/Hide Comments ({{ count($post->comments) }})</button>
                                                        <!-- /Comments Section -->
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        
                                        </div>
                                    @empty
                                        <p>No posts available.</p>
                                    @endforelse
                                </div>
                                <!-- /Forum List -->



                            </div>
                            <!-- /Inner main -->
                        </div>
			
                        </div>
                    </div>
                </div>
            </div>      

        <div class="footer-wrap pd-20 mb-20 card-box">
            Crunchy Code Web Application System developed by Elysium
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all comment containers and toggle buttons
        const commentContainers = document.querySelectorAll('.comments-container');
        const commentToggles = document.querySelectorAll('.comment-toggle');

        // Hide all comment containers initially
        commentContainers.forEach(container => {
            container.style.display = 'none';
        });

        // Add click event listeners to toggle buttons
        commentToggles.forEach((toggle, index) => {
            toggle.addEventListener('click', function() {
                const container = commentContainers[index];

                // Toggle display of the comments container
                if (container.style.display === 'none') {
                    container.style.display = 'block';
                } else {
                    container.style.display = 'none';
                }
            });
        });
    });
</script>

    
@endsection