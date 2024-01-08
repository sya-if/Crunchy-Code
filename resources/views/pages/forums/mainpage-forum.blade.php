@extends('layouts.master')

@php($user = Auth::user())

@section('content')


<style>


/* CSS */
.button-85 {
  padding: 0.6em 2em;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background: #111;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-85:before {
  content: "";
  background: linear-gradient(
    45deg,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-button-85 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.button-85:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #222;
  left: 0;
  top: 0;
  border-radius: 10px;
}


.btn-block-width 
{
    width:83% !important;
}


@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

* {
	box-sizing: border-box;
}

.courses-container {
	
}

.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px;
	overflow: hidden;
	width: 95%;
}

.course h6 {
  color: #fff !important;
	opacity: 0.6;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.course h2 {
  color: #fff !important;
	letter-spacing: 1px;
	margin: 10px 0;
}

.course-preview {
	background-color: #2A265F;
	color: #fff;
	padding: 20px;
	max-width: 300px;
}

.course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 30px;
	text-decoration: none;
}

.course-info {
	padding: 30px;
	position: relative;
	width: 100%;
}

.progress-container {
	position: absolute;
	top: 30px;
	right: 30px;
	text-align: right;
	width: 150px;
}

.progress {
	background-color: #ddd;
	border-radius: 3px;
	height: 5px;
	width: 100%;
}

.progress::after {
	border-radius: 3px;
	background-color: #2A265F;
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 5px;
	width: 66%;
}

.progress-text {
	font-size: 10px;
	opacity: 0.6;
	letter-spacing: 1px;
}

.btn {
	background-color: #2A265F;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	padding: 12px 25px;
	position: absolute;
	bottom: 30px;
	right: 30px;
	letter-spacing: 1px;
}


</style>


<div class="main-container">
  <div class="pd-ltr-20 height-100-p xs-pd-20-10">
      <div class="min-height-200px">

          <div class="page-header">
              <div class="row">
                  <div class="col-md-12 col-sm-12">
                      <div class="title">
                          <h4>Forum Crunchy Code</h4>
                      </div>
                      <nav aria-label="breadcrumb" role="navigation">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Forum</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>

          @foreach($forums as $forum)
              <div class="courses-container">
                  <div class="course">
                      <div class="course-preview col-md-4">
                          <h6>Forum</h6>
                          <h2>{{ $forum->title }}</h2>
                          <a href="{{ route('forum.page', ['pageNumber' => $loop->index + 1, 'forumTitle' => $forum->title]) }}">Dapatkan informasi di sini <i class="fas fa-chevron-right"></i></a>
                      </div>

                      <div class="course-info col-md-8">
                          <h5>Penerangan</h5>
                          <p style="text-align:justify;">{{ $forum->description }}</p>
                          <br>
                          <a class="button-85" role="button" href="{{ route('forum.page', ['pageNumber' => $loop->index + 1, 'forumTitle' => $forum->title]) }}">Sertai</a>

                      </div>
                  </div>
              </div>
          @endforeach

      </div>
  </div>

  <div class="footer-wrap pd-20 mb-20 card-box">
    Crunchy Code Web Application System developed by Elysium
  </div>

</div>



@endsection