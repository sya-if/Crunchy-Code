<?php

use App\Http\Controllers\HomeController;
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

//Ubah

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/delete-profile',[HomeController::class, 'view_delete_profile']);

Route::get('/delete/{id}',[HomeController::class, 'delete_profile']);

Route::get('/settings', [HomeController::class, 'user_settings'])->name('user_settings');

Route::get('/save/{id}', [HomeController::class, 'save_settings']);
