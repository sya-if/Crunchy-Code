<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = Quiz::all();
        return view('admin\quiz\quiz_index', compact('quizzes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quiz = new Quiz;
        return view('admin\quiz\create', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quiz = new Quiz();

        // Validate the input data
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'duration' => 'required|integer',
            'score' => 'required|integer',
            'review' => 'required|boolean',
            'questioncount' => 'required|integer',
        ]);

        // Information from the form is copied to the database
        $quiz->title = $request['title'];
        $quiz->description = $request['description'];
        $quiz->duration = $request['duration'];
        $quiz->score = $request['score'];
        $quiz->review = $request['review'];
        $quiz->questioncount = $request['questioncount'];

        // Save the action
        $quiz->save();

        // Redirect to a success page or back to the form
        Session()->flash('message', 'Quiz has been created!');
        return redirect()->route('quiz.index');
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
    public function edit(Quiz $quiz)
    {
        return view('admin\quiz\edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'duration' => 'required|integer',
            'score' => 'required|integer',
            'review' => 'required|boolean',
            'questioncount' => 'required|integer',
        ]);

        $quiz->update($validatedData);

        return redirect()->route('quiz.index', $quiz)->with('success', 'quiz updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        // Redirect to the view quiz page
        return redirect()->route('quiz.index')->with('success', 'quiz Deleted successfully');;
    }
}
