@extends('layouts.master')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div id="settings-content">
                <h2>User Settings</h2>
                @foreach($data as $data)
                <form>
                    @csrf
                    <br><br>
                    <h4>Basic</h4>
                    <div class="form-group">
                        <label for="profile_picture">Profile Picture</label><br>
                        <div class="profile-picture-container">
                            <img id="profile-picture" src="../../../vendors/images/photo1.jpg" alt="Profile Picture" class="profile-picture">
                            <input type="file" id="profile-picture-input" accept="image/*" style="display: none;">
                            <div class="edit-button">
                                <button type="button" class="btn btn-secondary" onclick="openProfilePictureInput()">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="setting1">Username</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{$data->name}}">
                    </div>
                    <div class="form-group">
                        <label for="setting2">Email Address</label>
                        <input type="text" id="setting2" name="setting2" class="form-control" value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                        <label for="setting3">Phone Number</label>
                        <input type="text" id="setting3" name="setting3" class="form-control" value="0123456789">
                    </div>
                    <button type="submit" class="btn btn-primary" href="{{url('save', $data->id)}}">Save Settings</button>
                </form>
                <form>
                    @csrf
                    <br><br>
                    <h4>Password</h4>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="c-password">Confirm Password</label>
                        <input type="text" id="c-password" name="c-password" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Save Settings"/>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
<style>
    .profile-picture-container {
        position: relative;
        display: inline-block;
    }
    
    .profile-picture {
        width: 150px;
        /* Set the desired width */
        height: 150px;
        /* Set the desired height */
        object-fit: cover;
        /* This property ensures the image covers the container without stretching */
    }

    .edit-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .edit-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0; /* Initially hide the button */
        transition: opacity 0.3s; /* Add a smooth transition for opacity */
    }

    .profile-picture-container:hover .edit-button {
        opacity: 1; /* Show the button when hovering over the container */
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let profilePictureInput = document.getElementById("profile-picture-input");

        profilePictureInput.addEventListener('change', function(event) {
            let file = event.target.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function() {
                    let newImageUrl = reader.result;
                    document.getElementById("profile-picture").src = newImageUrl;
                };
                reader.readAsDataURL(file);
            }
        });
    });

    function openProfilePictureInput() {
        document.getElementById("profile-picture-input").click();
    }
</script>
@endsection