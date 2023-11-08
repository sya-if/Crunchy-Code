<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all students from the database
        $users = User::all();

        // Senaraikan semua student. Return page view name 
        return view('admin.student_index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create new variable for user
        $user = new User;

        //Redirect to create.blade.php for model User
        return view('admin.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        // Validate the input data
        $this->validate($request, [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable',
            'password' => 'nullable|min:8|confirmed',
        ]);

        // Information from the form is copied to the database
        $user->fullname = $request['fullname'];
        $user->nickname = 'Student';
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->password = $request['password'];

        // Save the action
        $user->save();

        // Redirect to a success page or back to the form
        Session()->flash('message', 'Your student has been created!');
        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $user->delete();

        Session()->flash('message', 'Student has been deleted sucessfully');

        // Redirect to the student list page
        return redirect()->route('user.index');
    }
}
