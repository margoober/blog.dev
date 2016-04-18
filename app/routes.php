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

Route::get('/horndorn', 'HomeController@showTheDorn');

Route::get('/simplesnailman', 'HomeController@showSimpleSnailman');

//REST routes!:

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::put('/posts/{post}', 'PostsController@update');
Route::delete('/posts/{post}', 'PostsController@destroy');
/*
ALL THESE ARE RENDERED BY:

Route::resource('posts', 'PostsController');
*/

//search route
Route::get('/search-posts', 'PostsController@getAllLike');

//Route::resource('users', 'UsersController');
Route::get('/login', 'UsersController@showLogin');
Route::post('/login', 'UsersController@doLogin');
Route::get('/logout', 'UsersController@logout');
Route::get('/users/create', 'UsersController@create');
Route::get('/users/{user}', 'UsersController@show');
Route::get('/users', 'UsersController@index');
Route::post('/users', 'UsersController@store');

Route::get('query-test', function() {
	//SELECT * FROM posts WHERE title = 'Poodle Parade'
	// $posts = Post::where('title', 'LIKE', '%Poodl%')->get();
	// foreach ($posts as $post) {
	// 	echo $post->title;

	// $posts = Post::join('users', 'post.user_id', '=', 'users.id');
	// //SELECT * FROM posts JOIN users on posts.user_id = users.id


	$posts = Post::select('body')->get();
	foreach ($posts as $post) {
		var_dump($post->body);
		//die();
	}
});

Route::get('my-posts', function() {
	$user = User::first();

	foreach ($user->posts as $post) {
		echo "Title is: $post->title" . PHP_EOL;
		echo "Body is: $post->body" . PHP_EOL;
	}
});