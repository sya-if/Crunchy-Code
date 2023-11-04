<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{

    public function getProfile()
    {
        $user = Auth::user();

        // Return the page profile yang reside dalam folder page
        return view('page.profile', compact('user'));
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
            'name' => 'required|min:3',
            'email' => ['required', 'email', 'unique:users,email,' . $user->id],
            'phone' => 'nullable',
            'password' => 'nullable|min:8|confirmed',
        ]);

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];

        // Hanya save password if ada request password. Maksudnya bila user isi password, baru dia akan save password
        if ($request['password']) {
            $user->password = bcrypt($request['password']);
        }
        $user->save();

        Session()->flash('message', 'Your profile has been updated successfully !');

        // Redirect to the profile page
        return redirect()->route('profile');

    }
}
