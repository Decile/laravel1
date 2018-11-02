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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'blog'], function(){
   Route::get('register','PostController@register')->name('blog.register');
   Route::post('create','PostController@create')->name('blog.create');
   Route::get('view','PostController@show')->name('blog.view');
   Route::get('edit/{id}','PostController@edit')->name('blog.edit');
   Route::post('update/{id}','PostController@update')->name('blog.update');
   Route::get('delete/{id}','PostController@delete_data')->name('blog.delete');
});

/*Route::get('update/{id}',[
        'uses' => 'PostController@updatePost',
        'as' => 'post.update'
    ]);
    Route::post('update/{id}',[
        'uses' => 'PostController@editPost',
        'as' => 'post.edit'
    ]);*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
