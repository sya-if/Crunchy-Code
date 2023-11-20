@extends('layouts.master')

@php($user = Auth::user())

@section('content')


<div class="main-container">
    <div class="pd-ltr-20 height-100-p xs-pd-20-10">
            <div class="min-height-200px">
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1.2</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Module 1.2: Your Module Title</h2>
                    <p class="card-text">
                        Welcome to Module 1.2! In this module, we will cover the following topics:
                    </p>
                    <ul>
                        <li>Topic 1</li>
                        <li>Topic 2</li>
                        <li>Topic 3</li>
                    </ul>
                    <p class="card-text">
                        This module aims to provide you with a solid understanding of these key concepts.
                    </p>
                    <p class="card-text">
                        Feel free to navigate through the content and complete the associated exercises.
                    </p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

    </div>
</div>

@endsection