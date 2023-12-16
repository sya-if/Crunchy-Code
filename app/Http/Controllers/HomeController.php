<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Material;
use App\Models\Submaterial;
use App\Models\Quiz;
use App\Models\Subquiz;
use App\Models\Forum;
use App\Models\ForumPost;
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
        $materials = Material::all();
        $submaterials = SubMaterial::all();

        // Return the page module 1-1 yang reside dalam folder page
        return view('pages.materials.mainpage-module', compact('user', 'materials', 'submaterials'));
    }

    // View the specific module page
    public function showModulePage($module)
    {
        $user = Auth::user();

        // Assuming the module views are named module-1-1.blade.php, module-1-2.blade.php, etc.
        $viewName = "pages.materials.module-$module";

        // Check if the view exists before attempting to render it
        if (view()->exists($viewName)) {
            // If the view exists, render it and pass any necessary data (e.g., $user) to the view
            return view($viewName, compact('user'));
        } else {
            // If the view doesn't exist, you can handle the situation accordingly
            return abort(404); // or any other logic you prefer
        }
    }

    // View the Quiz page
    public function viewQuiz()
    {
        $user = Auth::user();
        $quizzes = Quiz::all();
        $subquizzes = Subquiz::all();

        // Return the page quiz 1-1 yang reside dalam folder page
        return view('pages.quizzes.mainpage-quiz', compact('user', 'quizzes', 'subquizzes'));
    }

    // View the specific quiz page
    public function showQuizPage($quiz)
    {
        $user = Auth::user();

        $forum =

            // Assuming the quiz views are named quiz-1-1.blade.php, quiz-1-2.blade.php, etc.
            $viewName = "pages.quizzes.quiz-$quiz";

        // Check if the view exists before attempting to render it
        if (view()->exists($viewName)) {
            // If the view exists, render it and pass any necessary data (e.g., $user) to the view
            return view($viewName, compact('user'));
        } else {
            // If the view doesn't exist, you can handle the situation accordingly
            return abort(404); // or any other logic you prefer
        }
    }
    // Function to display main page of forum
    public function viewForumPage()
    {
        $forums = Forum::all();
        return view('pages\forums\mainpage-forum', compact('forums'));
    }

    // Function to display specific page of forum
    public function showForumPage($pageNumber, $forumTitle = null)
    {
        // FInd specific forum based on forum title
        $forum = Forum::where('title', $forumTitle)->first();

        $posts = ForumPost::with('user')
            ->whereHas('forum', function ($query) use ($forumTitle) {
                $query->where('title', $forumTitle);
            })
            ->get();

        $user = Auth::user();

        // Assuming the forum views are named page-1.blade.php, page-2.blade.php, etc.
        $viewName = "pages.forums.page-$pageNumber";

        // Check if the view exists before attempting to render it
        if (view()->exists($viewName)) {
            // If the view exists, render it and pass any necessary data (e.g., $user) to the view
            return view($viewName, compact('user', 'forumTitle', 'forum','posts'));
        } else {
            // If the view doesn't exist, you can handle the situation accordingly
            return abort(404); // or any other logic you prefer
        }

    }

}
