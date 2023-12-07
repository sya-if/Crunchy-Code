<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;


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
        // View the sent data
        // dd($request);

        // Validation of data that has been sent. Check the format, the box has been filled.
        $user = Auth::user();

        // Standard validation
        $this->validate($request, [
            'fullname' => 'required|min:3',
            'nickname' => 'required|min:3',
            'email' => ['required', 'email', 'unique:users,email,' . ($user ? $user->id : '')],
            'phone' => 'nullable',
            'password' => 'nullable|min:8|confirmed',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:1000',
            'bio'=>'nullable',
            'school' => 'nullable',
            'dob' => 'nullable',
        ]);

        $user->fullname = $request['fullname'];
        $user->nickname = $request['nickname'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->bio = $request['bio'];
        $user->school = $request['school'];
        $user->dob = $request['dob'];


        // Hanya save password if ada request password. Maksudnya bila user isi password, baru dia akan save password
        if ($request['password']) {
            $user->password = bcrypt($request['password']);
        }

        
        $user->save();

        Session()->flash('message', 'Your profile has been updated successfully !');

        // Redirect to the profile page
        return redirect()->route('profile');

    }

    //This method will handle the form submission and update the user's photo.
    public function updatePhoto(Request $request)
    {
        //Validate the form data 
        $request->validate([
            'photo'=> 'required|image|mimes:jpeg, png, jpg|max:1000',
        ]);
        // Get the authenticated user
        $user = auth()->user();

        // Process and store the new photo
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('public/uploads/users');

            // Update the user's photo field in the database
            $user->photo = basename($photoPath);
            $user->save();

            // Redirect back with a success message
            return redirect()->back()->with('message', 'Profile photo updated successfully.');
        }

        // Redirect back with an error message if something went wrong
        return redirect()->back()->with('error', 'Failed to update profile photo.');
    
    }

    
}
