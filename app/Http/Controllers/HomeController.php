<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        return view('home');
    }

    public function view_delete_profile(){
        $data = User::all();
        return view('delete-profile', compact('data'));
    }
    
    public function delete_profile($id){
        $data = User::find($id);
        $data->delete();
        return redirect('login');
    }
}
