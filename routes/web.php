<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
