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

// Route::get('/', function () {
//     return view('posts.show');
// });

Route::get('/', 'PostController@index');
Route::get('/post', 'PostController@index');

Route::get('/post/{post}', 'PostController@show');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

Route::post('/post/{post}/comment', 'CommentController@store');




Route::get('/About', 'Aboutus@index');
