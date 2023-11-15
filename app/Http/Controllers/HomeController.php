<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user(); // Get the authenticated user
        $users = User::where('role', 'student')->get(); // Get students

        return view('home', compact('user', 'users'));
    }

    public function view_delete_profile()
    {
        $data = User::all();
        return view('delete-profile', compact('data'));
    }

    public function delete_profile($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('login');
    }

    public function user_settings()
    {
        $data = User::all();
        return view('user_settings', compact('data'));
    }

    public function save_settings($id, Request $request)
    {
        $data = User::find($id);

        // Update the user data based on the input values
        $data->name = $request->input('name');
        $data->email = $request->input('setting2');
        $data->phone = $request->input('setting3');

        // Save the updated data to the database
        $data->save();

        return redirect()->back()->with('success', 'Settings saved successfully');
    }

    public function logout()
    {
        return view('auth.login');
    }

    // View the module page
    public function viewModule()
    {
        $user = Auth::user();

        // Return the page module 1-1 yang reside dalam folder page
        return view('pages.materials.mainpage-module', compact('user'));
    }


}
