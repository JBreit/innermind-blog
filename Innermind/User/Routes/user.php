<?php

Route::group(['prefix' => 'users', 'middleware' => ['web']], function () {

    Route::get('/', ['uses' => 'UserApi@index', 'as' => 'users']);
});