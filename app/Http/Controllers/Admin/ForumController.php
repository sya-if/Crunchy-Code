<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\User;
use Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Forum::with('user')->get();
        $users = User::all();

        return view('admin.forum.forum_index', compact('forums', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forum = new Forum;
        return view('admin\forum\create', compact('forum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forum = new Forum();

        // Dapatkan user id bagi user yg tengah login sebagai creator of the forum
        $user = Auth::user();

        // Validate the input data
        $this->validate($request, [
            'forum-title' => 'required|string|max:255',
            'forum_category' => 'required|string|max:255',
            'forum-description' => 'required|string|max:255',
        ]);

        // Save the action
        $forum->user_id = $user->id;
        $forum->title = $request['forum-title'];
        $forum->category = $request['forum_category'];
        $forum->description = $request['forum-description'];

        // Save the action
        $forum->save();

        // Redirect to a success page or back to the form
        Session()->flash('message', 'Forum has been created!');
        return redirect()->route('forum.index');
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
        // Ambil product ID yang dihantar oleh edit button dekat profile_index page
        $forum = Forum::find($id);

        return view('admin.forum.edit', compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        // Dapatkan user id bagi user yg tengah login sebagai creator of the forum
        $user = Auth::user();

        // Validate the input data
        $this->validate($request, [
            'forum-title' => 'required|string|max:255',
            'forum_category' => 'required|string|max:255',
            'forum-description' => 'required|string|max:255',
        ]);

        // Save the action
        $forum->user_id = $user->id;
        $forum->title = $request['forum-title'];
        $forum->category = $request['forum_category'];
        $forum->description = $request['forum-description'];

        // Save the action
        $forum->save();

        // Redirect to a success page or back to the form
        Session()->flash('message', 'Forum has been updated seuccessfully.');
        return redirect()->route('forum.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        $forum->delete();

        // Redirect to the view material page
        return redirect()->route('forum.index')->with('success', 'Forum deleted successfully');
        ;
    }


}
