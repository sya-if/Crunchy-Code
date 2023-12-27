<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ForumController;
use App\Http\Controllers\ForumPostController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubmaterialController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route for edit profile. Panggil ProfileController. Method yang berbeza.
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'getProfile'])->name('profile');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'postProfile'])->name('profile.post');

// Route for handling the photo update
Route::post('/update-photo', [App\Http\Controllers\ProfileController::class, 'updatePhoto'])->name('update-photo');

// Authentication Route
Auth::routes();

// Route for student model (resource)
Route::resource('user', 'App\Http\Controllers\Admin\StudentController');

// Route for get the list of students
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route for logout into the system
Route::get('/logout', [LoginController::class, 'logout']);

// Route for student function - Resource Controller
Route::resource('users', StudentController::class);

// Route for student function - Material Controller
Route::resource('materials', MaterialController::class);

//Route for student function - Submaterial Controller
Route::resource('submaterials', SubmaterialController::class);

// Route for quiz function - Resource Controller
Route::resource('quizzes', QuizController::class);

// Add a custom route for destroying a subquiz
Route::delete('quizzes/{subquiz}/destroy-subquiz', [QuizController::class, 'destroySubquiz'])->name('quizzes.destroySubquiz');

// Add a custom route to go to editShow page
Route::get('/quizzes/{quiz}/editShow/{subquizId}', [QuizController::class, 'editShow'])->name('quizzes.editShow');

// Add a custom route to handle update on editShow page
Route::put('/quizzes/{quiz}/updateShow/{subquizId}', [QuizController::class, 'updateShow'])->name('quizzes.updateShow');

// Route for Module function - Resource Controller
Route::resource('modules', ModuleController::class);

// Route for forum function - Resource Controller
Route::resource('forum', ForumController::class);

// Route for forum post function - Resource Controller
Route::resource('post', ForumPostController::class);

// Replace create forum route
Route::get('/post/create/{forum_id}/{page_number}', [ForumPostController::class, 'create'])->name('post.create');

// Route for forum comment function - Resource Controller
Route::resource('comment', CommentController::class);

// Replace create discussion route
Route::get('/comment/create/{post_id}/{page_number}', [CommentController::class, 'create'])->name('comment.create');

// Route for module main page
Route::get('/module', [App\Http\Controllers\HomeController::class, 'ViewModule'])->name('module');

// Route for chosen module page
Route::get('/module/{module}', [App\Http\Controllers\HomeController::class, 'showModulePage'])->name('module.page');

// Route for quiz main page
Route::get('/quiz', [App\Http\Controllers\HomeController::class, 'ViewQuiz'])->name('quiz');

// Route for chosen quiz page
Route::get('/quiz/{quizId}', [App\Http\Controllers\HomeController::class, 'showQuizPage'])->name('quiz.page');

// Route for forum main page
Route::get('/discussion', [App\Http\Controllers\HomeController::class, 'viewForumPage'])->name('discussion');

// Route for specific page number
Route::get('/forum/page/{pageNumber}/{forumTitle?}', [App\Http\Controllers\HomeController::class, 'showForumPage'])->name('forum.page');

// Route for FAQ page
Route::get('/FAQ', [App\Http\Controllers\HomeController::class, 'viewFAQ'])->name('FAQ');

// Route for contact us form
Route::post('/contact', [ContactController::class, 'store'])->name('contact');

//Route for message
Route::get('/message', [MessageController::class, 'index'])->name('message');

//Route for delete message
Route::delete('/admin/messages/{id}', [MessageController::class, 'destroy'])->name('destroy');
