<?php

Route::group(['prefix' => 'posts', 'middleware' => ['web']], function () {

    Route::get('/', ['uses' => 'PostApi@index', 'as' => 'posts']);
});