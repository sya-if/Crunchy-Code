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
            'question_text' => 'required|string|max:255',
            'answer_1' => 'required|string|max:255',
            'answer_2' => 'required|string|max:255',
            'answer_3' => 'required|string|max:255',
            'answer_4' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
        ]);

        // Find or create the quiz based on chapternumber
        $quiz = Quiz::firstOrCreate(['chapternumber' => $request['chapternumber']], [
            'chaptertitle' => $request['chaptertitle'],
            'description' => $request['description'],
        ]);
    

        // Create a new Subquiz instance
        $subquiz = new Subquiz();
    
        // Set the values for the subquiz
        $subquiz->question_text = $request['question_text'];
        $subquiz->answer_1 = $request['answer_1'];
        $subquiz->answer_2 = $request['answer_2'];
        $subquiz->answer_3 = $request['answer_3'];
        $subquiz->answer_4 = $request['answer_4'];
        $subquiz->answer = $request['answer'];
    
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

    public function editShow(Quiz $quiz, $subquizId)
    {
        // Retrieve the specific subquiz based on the ID
        $subquiz = Subquiz::find($subquizId);
    
        // You can still pass $quiz and $subquiz to your view as needed
    
        return view('admin.quiz.editShow', compact('quiz', 'subquiz'));
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

    public function updateShow(Request $request, Quiz $quiz, $subquizId)
    {

    
        // Validate the request data for editing show.blade
        $request->validate([
            'question_text' => 'required|string|max:255',
            'answer_1' => 'required|string|max:255',
            'answer_2' => 'required|string|max:255',
            'answer_3' => 'required|string|max:255',
            'answer_4' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
        ]);
    
    
        // Find the specific subquiz based on the provided $subquizId
        $subquiz = $quiz->subquizzes()->find($subquizId);
    
    
        // Check if the subquiz is found
        if ($subquiz) {
            // Update the specific subquiz
            $subquiz->update([
                'question_text' => $request->input('question_text'),
                'answer_1' => $request->input('answer_1'),
                'answer_2' => $request->input('answer_2'),
                'answer_3' => $request->input('answer_3'),
                'answer_4' => $request->input('answer_4'),
                'answer' => $request->input('answer'),
            ]);            
    
            // Redirect or return response
            return redirect()->route('quizzes.show', $quiz)->with('success', 'Subquiz has been updated!');
        } else {
            // Redirect with an error message if subquiz is not found
            return redirect()->route('quizzes.show', $quiz)->with('error', 'Subquiz not found.');
        }
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
