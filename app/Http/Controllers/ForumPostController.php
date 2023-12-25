<?php

namespace App\Http\Controllers;

use Image;
use App\Models\User;
use App\Models\Forum;
use App\Models\ForumPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ForumPostController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create($forumId, $page)
    {

        // Find respective row
        $forum = Forum::find($forumId);

        // Create the post
        $post = new ForumPost;

        return view('pages\forums\create', compact('post', 'forum', 'page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new ForumPost();

        // Get user id for user who is currently logged in as the creator of the forum
        $user = Auth::user();

        // Validate the input data
        $this->validate($request, [
            'forum_id' => 'required|exists:forums,id',
            'title' => 'required|string|max:255',
            'attachment' => 'nullable|mimes:jpeg,jpg,png,pdf|max:10000',
            'description' => 'required|string|max:1000'
        ]);

        // Save the action
        $post->user_id = $user->id;
        $post->forum_id = $request['forum_id'];
        $post->title = $request['title'];
        $post->desciption = $request['description'];

        // Save the photo in the file system
        if ($request->hasFile('attachment')) {
            $image_name = 'posts_' . time() . '.' . $request->attachment->getClientOriginalExtension();
            $directory = $_SERVER['DOCUMENT_ROOT'] . '/uploads/posts';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            $request->attachment->move($directory, $image_name);

            // Save the name of the photo in the database
            $post->photo = $image_name;
        }

        // Fetch forum model
        $forum = Forum::find($request['forum_id']);

        // Assuming you have a variable $page that represents the page to redirect to
        $page = $request->input('page_number');

        $post->save();

        // Redirect to the index function with the desired page
        return redirect()->route('forum.page', ['pageNumber' => $page, 'forumTitle' => $forum->title]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ForumPost $post)
    {

        $page = $request->input('page_number');

        return view('pages\forums\edit', compact('post','page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ForumPost $post, Request $request)
    {
        // Get user id for user who is currently logged in as the creator of the forum
        $user = Auth::user();

        // Validate the input data
        $this->validate($request, [
            'forum_id' => 'required|exists:forums,id',
            'title' => 'required|string|max:255',
            'attachment' => 'nullable|mimes:jpeg,jpg,png,pdf|max:10000',
            'description' => 'required|string|max:1000'
        ]);

        // Save the action
        $post->user_id = $user->id;
        $post->forum_id = $request['forum_id'];
        $post->title = $request['title'];
        $post->desciption = $request['description'];

        // Save the photo in the file system
        if ($request->hasFile('attachment')) {
            $image_name = 'posts_' . time() . '.' . $request->attachment->getClientOriginalExtension();
            $directory = $_SERVER['DOCUMENT_ROOT'] . '/uploads/posts';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            $request->attachment->move($directory, $image_name);

            // Save the name of the photo in the database
            $post->photo = $image_name;
        }

        // Fetch forum model
        $forum = Forum::find($request['forum_id']);

        // Assuming you have a variable $page that represents the page to redirect to
        $page = $request->input('page_number');

        $post->save();

        // Redirect to the index function with the desired page
        return redirect()->route('forum.page', ['pageNumber' => $page, 'forumTitle' => $forum->title]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumPost $post, Request $request )
    {
        $post->delete();

        Session()->flash('message', 'Post has been deleted successfully');

        // Fetch the page number
        $page = $request->input('page_number');

        // Fetch forum model
        $forum = Forum::find($post->forum_id);

        // Redirect to the student list page
        return redirect()->route('forum.page', ['pageNumber' => $page, 'forumTitle' => $forum->title]);
    }
}
