<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{
		$user = new User();
		return $this->validateAndSave($user);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		if (!$user) {
			App::abort(404);
		}
		return View::make('users.show')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		if (!$user) {
			App::abort(404);
		}
		return View::make('users.edit')->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function showLogin() {
		return View::make('login');
	}
	public function doLogin() {
		$validator = Validator::make(Input::all(), User::$loginRules);

		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		}

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
			Session::flash('successMessage', 'Welcome!');
			return Redirect::intended('/posts');
		} else {
			Session::flash('errorMessage', 'Your credentials were not valid.');
			return Redirect::back()->withInput();
		}
	}

	public function showLogout() {
		return View::make('logout');
	}

	public function logout() {
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

	public function validateAndSave($user) {
		$validator = Validator::make(Input::all(), User::$rules);
		if ($validator->fails()) {
			Session::flash('errorMessage', "Unable to save user info.");
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			$user->profile_img = 'test.jpg';
			$user->save();
			Log::info("Saved user #{$user->id} -- {$user->title}");
			Session::flash('successMessage', "user was saved!");

			return Redirect::action('UsersController@show', $user->id);
		}
	}


}
