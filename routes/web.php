<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    Route::post('/signup', 'UserController@postSignUp')->name('signup');
    Route::post('/signin', 'UserController@postSignIn')->name('signin');
    Route::get('/dashboard', 'PostController@getDashboard')->name('dashboard')->middleware('auth');
    Route::post('/createpost', 'PostController@postCreatePost')->name('post.create')->middleware('auth');
    Route::get('delete-post/{post_id}', 'PostController@getDeletePost')->name('post.delete')->middleware('auth');
});