@extends('layouts.master')

@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Student List</h4>
                        </div>

                        <!-- Untuk check whether session has established ataupun tidak -->
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif


                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Student List</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <!-- Create New Student -->
                            <div class="pull-right">
                                <a href="{{ route('user.create') }}" class="btn btn-primary">Add Student</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">

                <!-- Title-->
                <div class=" row pd-20">
                    <h4 class="text-blue h4">Students's List</h4>
                </div>
        
                <!-- Table -->
                <div class="pb-18">
                    <div class="table-responsive">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">FullName</th>
                                    <th>NickName</th>
                                    <th>Email</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="table-plus">{{$user->fullname}}</td>
                                    <td>{{$user->nickname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
    
                                                <!-- Edit Student Information -->
                                                <a href="{{ route('user.edit', $user) }}" class="dropdown-item"><i class="dw dw-edit2"></i>Edit</a>

    
                                                <!-- Delete Student Information -->
                                                <form method="POST" action="{{route('user.destroy', $user->id)}}">
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    @csrf
    
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure that you want to delete this user?')" class="dropdown-item"><i class="dw dw-delete-3"></i>Delete</button>
                                                </form>
    
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable End -->
    </div>
</div>

@endsection