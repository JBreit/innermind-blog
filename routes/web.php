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

Route::get('/blog', 'PostsController@index')->name('blog');
Route::get('/blog/create', 'PostsController@create');
Route::post('/blog', 'PostsController@store')->name('blog.store');
Route::get('/blog/{post}', 'PostsController@show');

Route::post('/blog/{post}/comments', 'CommentsController@store');
