<?php

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



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PostsController@index');
Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::get('/posts/{post}', 'PostsController@show')->name('posts.show');

Route::post('/posts/{post}/comments','CommentsController@store');

// user
Route::get('/user', 'User@index')->name('user');
Route::get('/user/{userName}', 'User@show')->name('user.username');



