<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Auth;
use Image;
use Hash;



class ProfileController extends Controller
{

    public function getProfile()
    {
        $user = Auth::user();

        // Return the page profile yang reside dalam folder page
        return view('pages.profile', compact('user'));
    }

    // Function to handle the POST method.Accept form request by using parameter request
    public function postProfile(Request $request)
    {

        // Validation of data that has been sent. Check the format, the box has been filled.
        $user = Auth::user();

        //Standard validation
        $request->validate([
            'fullname' => 'required|regex:/^[a-zA-Z\s]+$/',
            'nickname' => 'required|regex:/^[a-zA-Z\s]+$/',
            // 'email' => ['required', 'email', 'unique:users,email,' . ($user ? $user->id : '')],
            'phone' => 'required',
            'password' => 'required|min:8|confirmed',
            'bio' => 'required',
            'school' => 'required|regex:/^[a-zA-Z\s]+$/',
            'dob' => 'required|date',
        ]);
        
        $user->update([
            'fullname' => $request['fullname'],
            'nickname' => $request['nickname'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'bio' => $request['bio'],
            'school' => $request['school'],
            'dob' => $request['dob'],
            'password' => $request->filled('password') ? Hash::make($request['password']) : $user->password,
        ]);

        Session::flash('message', 'Your profile has been updated successfully!');

        // Redirect to the profile page
        return redirect()->route('profile');

    }
    public function updatePhoto(Request $request, User $user)
    {
        // Dapatkan user id bagi user yg tengah login sebagai creator of the forum
        $user = Auth::user();

        // Validate the input data
        $this->validate($request, [
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:1000',
        ]);


        // Process and store the new photo
        if ($request->hasFile('photo')) {
            // Rename
            $image_name = 'user_' . time() . '.' . $request->photo->getClientOriginalExtension();

            // Cari Direktori 
            $directory = $_SERVER['DOCUMENT_ROOT'] . '/uploads/users';

            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            $img = Image::make($request->photo->getRealPath());

            $img->fit(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($directory . '/' . $image_name, 75);

            // Update the user's photo field in the database
            $user->photo = $image_name;

            // Save the user with the updated photo field
            $user->save();

            // Redirect back with a success message
            return redirect()->back()->with('message', 'Profile photo updated successfully.');
        }

        // Redirect back with an error message if something went wrong
        return redirect()->back()->with('error', 'Failed to update profile photo.');
    }

}
