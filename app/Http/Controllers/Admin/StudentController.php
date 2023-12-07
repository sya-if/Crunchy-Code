<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Auth;
use Hash;
use Image;

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
        $users = User::where('role', 'student')->get();

        // Senaraikan semua student. Return page view name 
        return view('admin\student\student_index', compact('users'));
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
        return view('admin\student\create', compact('user'));
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
            'nickname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable',
            'password' => 'nullable|min:8|confirmed',
            'photo' =>'nullable|mimes:jpeg,jpg,png|max:10000'
            
        ]);

        // Information from the form is copied to the database
        $user->fullname = $request['fullname'];
        $user->nickname = $request['nickname'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->password = Hash::make($request['password']); // Hash the password 

        //save photo
        $image_name ='user_'.time().'.'.$request->photo->getClientOriginalExtension();
        $directory = $_SERVER['DOCUMENT_ROOT'].'/uploads/users';
        if (!file_exists($directory)){
            mkdir ($directory,0755,true);
        }
        $img = Image::make ($request->photo->getRealPath());

        $img->fit(200,200,function ($constraint){
            $constraint->aspectRatio();
        })->save ($directory . '/' .$image_name,75);
        
        $user->photo =$image_name;


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
    public function edit(User $user)
    {
        return view('admin\student\edit_user', compact('user'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
        {
            $validatedData = $request->validate([
                'fullname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                // Add any other fields you want to validate and update
            ]);

            $user->update($validatedData);

            return redirect()->route('user.index', $user)->with('success', 'User updated successfully');
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

        Session()->flash('message', 'Student has been deleted successfully');

        // Redirect to the student list page
        return redirect()->route('user.index');
    }
}
