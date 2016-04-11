<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// }); replaced by:

Route::get('/', 'HomeController@showWelcome');

Route::get('/sayhello/{name?}', function($name = 'pal') {
	$data = [
		'name' => $name
	];
	return View::make('my-first-view')->with($data);
});

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/rolldice/{guess}', 'HomeController@rolldice');

Route::get('/random-guess', 'HomeController@randomGuess');
