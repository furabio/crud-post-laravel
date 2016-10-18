<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', 'PostsController@index');

Route::group(['prefix' => 'posts'], function(){

    // Posts routes
    Route::get('', ['uses' => 'PostsController@index', 'as' => 'posts.index']);
    Route::get('create', ['uses' => 'PostsController@create', 'as' => 'posts.create']);
    Route::post('', ['uses' => 'PostsController@store', 'as' => 'posts.store']);
    Route::get('{slug}', ['uses' => 'PostsController@show', 'as' => 'posts.show']);
    Route::get('{id}/edit', ['uses' => 'PostsController@edit', 'as' => 'posts.edit']);
    Route::put('{id}', ['uses' => 'PostsController@update', 'as' => 'posts.update']);
    Route::delete('{id}', ['uses' => 'PostsController@destroy', 'as' => 'posts.delete']);

});


