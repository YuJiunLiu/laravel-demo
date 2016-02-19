<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::pattern('id','[0-9]+');

	Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
	
	Route::get('post/create', ['as' => 'posts.create', 'uses' => 'PostsController@create']);
	Route::get('post/{id}'  , ['as' => 'posts.show'  , 'uses' => 'PostsController@show']);
	
	Route::group(['prefix' => 'admin'], function(){
		Route::get('post', ['as' => 'post',function () {
			
			return 'Post Show';
		}]);

		Route::get('news/{id}', function ($id) {

			return 'News: '.$id;
		});

		Route::get('articles/{id}', function ($id) {

			return 'Articles: '.$id;
		});	
			
	});
	

	Route::get('hello/{name?}', ['as' => 'hello',function($name = '') {

		return 'Hello, '.$name;
	}])->where('name','[a-z]+');
});
