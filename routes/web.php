<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@index')->name('home');

Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/posts', 'PostController@posts')->name('posts');

Route::middleware('auth')->prefix('/posts')->group(function() { //posso aggiungere ->prefix('posts') siccome le rotte sono raggruppate e aggiunge /posts prima di ogni url
    // create new post
    Route::get('/create', 'PostController@createPost')->name('createPost');
    Route::post('/store', 'PostController@storePost')->name('storePost');
    
    // edit and update post
    Route::get('/edit/{id}', 'PostController@editPost')->name('editPost');
    Route::post('/update/{id}', 'PostController@updatePost')->name('updatePost');

    Route::get('/delete/{id}', 'PostController@deletePost')->name('deletePost');
});