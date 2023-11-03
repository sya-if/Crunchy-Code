@extends('layouts.master')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div id="delete-profile-content">
                <table style="border-collapse: collapse; width: 100%; background-color: #f5f5f5;">
                    <tr>
                        <th style="background-color: transparent; padding: 8px; text-align: left;">User Name</th>
                        <th style="background-color: transparent; padding: 8px; text-align: left;">Email</th>
                    </tr>
                    @foreach($data as $data)

                    <tr>
                        <td style="padding: 8px; text-align: left;">{{$data->name}}</td>
                        <td style="padding: 8px; text-align: left;">{{$data->email}}</td>
                        <td><a class="btn btn-danger" href="{{url('delete', $data->id)}}">Delete Profile</a></td>
                    </tr>

                    @endforeach
                </table>
                
            </div>
        </div>
    </div>
</div>
@endsection
