<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function rolldice($guess)
	{
	$randnumb = rand(1, 6);
	$data = [
		'randnumb' => $randnumb,
		'guess' => $guess
	];
	return View::make('rolldice')->with($data);
	}

	public function randomGuess()
	{
		$guess = rand(1, 6);
		return Redirect::action('HomeController@rolldice', $guess);
	}

	public function showTheDorn(){
		return View::make('horndorn');
	}

	public function showSimpleSnailman() {
		return View::make('simplesnailman');
	}
}
