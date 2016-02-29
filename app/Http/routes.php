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

Route::get('/', 'TeamsController@index');


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
	Route::get('/teams', 'TeamsController@index');
	Route::get('/teams/export','TeamsController@export');
	Route::get('/teams/{team_name}', 'TeamsController@show');
	
	Route::post('/teams/{team_name}/create', 'TeamsController@create');
	Route::post('/teams/{team_name}/delete', 'TeamsController@delete');
	Route::get('/teams/export}','TeamsController@export');

    
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/teams/{team_name}/edit', 'TeamsController@edit');
    Route::get('/home', 'HomeController@index');
    
});
