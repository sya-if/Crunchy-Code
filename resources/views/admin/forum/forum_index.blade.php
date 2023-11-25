@extends('layouts.master')

@php($user = Auth::user())

@section('content')

<div class="main-container">
    @if(session()->has('success'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <b>{{session()->get('success')}}</b>
    </div>
    @endif
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Forum List</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Forum</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>
            </div>
            <!-- Striped table start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-right">
                        <a href="{{route('forum.create')}}" class="btn btn-info float-end">Add New Forum</a>
                    </div>
                    <div class="pull-left">
                        <h4 class="text-blue h4">List of Forums</h4>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Forum Title</th>
                            <th scope="col">Forum Description</th>
                            <th scope="col">Forum Category</th>
                            <th scope="col">Forum Creator</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                        @foreach($forums as $index => $forum)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{$forum->title}}</td>
                            <td>{{$forum->description}}</td>
                            <td>{{$forum->category}}</td>
                            <td>{{$forum->user->nickname}}</td>
                            <td><a href="{{route('forum.edit', $forum->id)}}" class="btn btn-success">Edit</a></td>
                            <td>
                                <form id="deleteForm" method="POST" action="{{ route('forum.destroy', $forum->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" id="deleteBtn">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                 
                    </tbody>
                </table>
            </div>
            <!-- Striped table End -->
        </div>
    </div>
</div>


@endsection