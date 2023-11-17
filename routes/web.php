<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::resource('materials', MaterialController::class);

// Route for quiz function - Resource Controller
Route::resource('quiz', QuizController::class);

// Route for module page
Route::get('/module', [App\Http\Controllers\HomeController::class, 'ViewModule'])->name('module');

// Route for Module 1.2 page
Route::get('/module', [App\Http\Controllers\HomeController::class, 'ViewModule12'])->name('module1-2');