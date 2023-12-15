<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Subquiz;

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
        $subquizzes = Subquiz::all();
        return view('admin\quiz\quiz_index', compact('quizzes', 'subquizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quiz = new Quiz;
        $subquiz = new Subquiz;
        return view('admin\quiz\create', compact('quiz', 'subquiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate the input data
        $this->validate($request, [
            'chapternumber' => 'required|string|max:255',
            'chaptertitle' => 'required|string|max:255',
            'description' => 'required|string',
            'subchapternumber' => 'required|string|max:255',
            'subchaptertitle' => 'required|string|max:255',
        ]);

        // Find or create the quiz based on chapternumber
        $quiz = Quiz::firstOrCreate(['chapternumber' => $request['chapternumber']], [
            'chaptertitle' => $request['chaptertitle'],
            'description' => $request['description'],
        ]);
    

        // Create a new Subquiz instance
        $subquiz = new Subquiz();
    
        // Set the values for the subquiz
        $subquiz->subchapternumber = $request['subchapternumber'];
        $subquiz->subchaptertitle = $request['subchaptertitle'];
    
        // Associate the subquiz with the quiz
        $subquiz->quizzes()->associate($quiz);
    
        // Save the subquiz
        $subquiz->save();
    
        // Redirect to a success page or back to the form
        session()->flash('message', 'quiz and Subquiz has been created!');
        return redirect()->route('quizzes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        // Get the associated Subquizzes
        $subquizzes = $quiz->subquiz;

        return view('admin\quiz\show', compact('quiz', 'subquizzes'));
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

    public function editShow(Quiz $quiz)
    {
        return view('admin\quiz\editShow', compact('quiz'));
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
        // Validate the request data for editing quiz_index
        $request->validate([
            'chapternumber' => 'required|string|max:255',
            'chaptertitle' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Update quiz fields
        $quiz->update([
            'chapternumber' => $request['chapternumber'],
            'chaptertitle' => $request['chaptertitle'],
            'description' => $request['description'],
        ]);

        // Redirect or return response
        return redirect()->route('quizzes.index')->with('success', 'Quiz has been updated!');
    }

    public function updateShow(Request $request, Quiz $quiz)
    {
        // Validate the request data for editing show.blade
        $request->validate([
            'subchapternumber' => 'required|string|max:255',
            'subchaptertitle' => 'required|string|max:255',
        ]);

        // Check if subchapter fields are present in the request
        if ($request->has('subchapternumber') && $request->has('subchaptertitle')) {
            // Delete existing subquiz first
            $quiz->subquizzes()->delete();

            // Create new subquiz
            $quiz->subquizzes()->create([
                'subchapternumber' => $request['subchapternumber'],
                'subchaptertitle' => $request['subchaptertitle'],
            ]);
        }

        // Redirect or return response
        return redirect()->route('quizzes.show', $quiz)->with('success', 'subquiz has been updated!');
    } 


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(quiz $quiz)
    {
        $quiz->delete();

        // Redirect to the view quiz page
        session()->flash('message', 'Quiz and associated subquizs have been deleted!');
        return redirect()->route('quizzes.index');
    }

    public function destroySubquiz(Subquiz $subquiz)
    {
        // Delete the subquiz only
        $subquiz->delete();

        // Redirect to a success page or back to the show page
        session()->flash('message', 'Subquiz has been deleted!');
        return redirect()->back();
    }

    
}
