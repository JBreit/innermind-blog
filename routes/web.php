<?php

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
 
Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

Route::post('/logout', 'SessionsController@destroy')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/blog/tags/create', 'TagsController@create');
Route::get('/blog/tags', 'TagsController@list')->name('tags.list');
Route::post('/blog/tags', 'TagsController@store')->name('tags.store');
Route::get('/blog/tags/{tag}', 'TagsController@index');

Route::get('/blog', 'PostsController@index')->name('blog');
Route::get('/blog/create', 'PostsController@create');
Route::post('/blog', 'PostsController@store')->name('blog.store');
Route::get('/blog/{post}', 'PostsController@show');
Route::get('/blog/{post}/edit', 'PostsController@edit');

Route::post('/blog/{post}/comments', 'CommentsController@store');
