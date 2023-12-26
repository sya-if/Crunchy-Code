<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ForumPost;
use App\Models\Forum;
use App\Models\Comment;
use App\Models\User;
use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($postID, $page)
    {
        // Find respective row
        $post = ForumPost::find($postID);

        // Create the comment
        $comment = new Comment;

        return view('pages\forums\create-comment', compact('post', 'comment', 'page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment();

        // Get user id for user who is currently logged in as the creator of the forum
        $user = Auth::user();

        // Validate the input data
        $this->validate($request, [
            'post_id' => 'required|exists:forum_posts,id',
            'title' => 'required|string|max:255',
            'attachment' => 'nullable|mimes:jpeg,jpg,png,pdf|max:10000',
            'description' => 'required|string|max:100000'
        ]);

        // Save the action
        $comment->user_id = $user->id;
        $comment->post_id = $request['post_id'];
        $comment->title = $request['title'];
        $comment->description = $request['description'];

        // Save the photo in the file system
        if ($request->hasFile('attachment')) {
            $image_name = 'comments_' . time() . '.' . $request->attachment->getClientOriginalExtension();
            $directory = $_SERVER['DOCUMENT_ROOT'] . '/uploads/comments';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            $request->attachment->move($directory, $image_name);

            // Save the name of the photo in the database
            $comment->photo = $image_name;
        }

        // Fetch forum model
        $forum = Forum::find($request['forum_id']);

        // Assuming you have a variable $page that represents the page to redirect to
        $page = $request->input('page_number');

        if ($comment->save()) {
            // Data saved successfully
        } else {
            // Handle the case when saving fails
            dd($comment->errors()); // Check for validation errors
        }

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
    public function edit(Request $request, Comment $comment)
    {
        $page = $request->input('page_number');

        return view('pages\forums\edit-comment', compact('comment', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Comment $comment, Request $request)
    {
        // Get user id for user who is currently logged in as the creator of the forum
        $user = Auth::user();

        // Validate the input data
        $this->validate($request, [
            'post_id' => 'required|exists:forum_posts,id',
            'title' => 'required|string|max:255',
            'attachment' => 'nullable|mimes:jpeg,jpg,png,pdf|max:10000',
            'description' => 'required|string|max:100000'
        ]);

        // Save the action
        $comment->user_id = $user->id;
        $comment->post_id = $request['post_id'];
        $comment->title = $request['title'];
        $comment->description = $request['description'];

        // Save the photo in the file system
        if ($request->hasFile('attachment')) {
            $image_name = 'comments_' . time() . '.' . $request->attachment->getClientOriginalExtension();
            $directory = $_SERVER['DOCUMENT_ROOT'] . '/uploads/comments';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            $request->attachment->move($directory, $image_name);

            // Save the name of the photo in the database
            $comment->photo = $image_name;
        }
        // Fetch the post model
        $postComment = ForumPost::find($request['post_id']);

        // Fetch forum model
        $forum = Forum::find($postComment->forum_id);


        // Assuming you have a variable $page that represents the page to redirect to
        $page = $request->input('page_number');

        if ($comment->save()) {
            // Data saved successfully
        } else {
            // Handle the case when saving fails
            dd($comment->errors()); // Check for validation errors
        }

        // Redirect to the index function with the desired page
        return redirect()->route('forum.page', ['pageNumber' => $page, 'forumTitle' => $forum->title]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
