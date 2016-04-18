<?php

class PostsController extends BaseController {

	public function __construct() {
		$this->beforeFilter('auth');
	}

	public function index() {
		$allPosts = Post::with('user')->paginate(4);
		return View::make('posts.index')->with(array('allPosts' => $allPosts));
	}

	public function create(){
		return View::make('posts.create');
		//return "Show a form for creating a post";
	}

	public function store() {
		$post = new Post();
		return $this->validateAndSave($post);
	}

	public function show($id) {
		$post = Post::find($id);
		if (!$post) {
			App::abort(404);
		}
		return View::make('posts.show')->with('post', $post);
	}

	public function edit($id) {
		$post = Post::find($id);
		if (!$post) {
			App::abort(404);
		}
		return View::make('posts.edit')->with('post', $post);
	}

	public function update($id) {
			$post = Post::find($id);
			if (!$post) {
			App::abort(404);
		}
			return $this->validateAndSave($post);
	}

	public function destroy($id) {
		$toDelete = Post::find($id);
		if(!$toDelete) {
			Session::flash('errorMessage', "Post not found.");
			return Redirect::action('PostsController@index');
		} else {
			$toDelete->delete();
			Log::info("Deleted post number {$toDelete->id} -- {$toDelete->title}");
			Session::flash('successMessage', "Your post was successfully deleted!");
			return Redirect::action('PostsController@index');
		}
	}

	public function validateAndSave($post) {
		$validator = Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()) {
			Session::flash('errorMessage', "Unable to save post.");
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			// future version: $post->user_id = Auth::id();
			$post->id = User::first()->id;
			$post->save();
			Log::info("Saved post #{$post->id} -- {$post->title}");
			Session::flash('successMessage', "Post was saved!");
			return Redirect::action('PostsController@show', $post->id);
		}
	}

	public static function getAllLike($search) {
		return self::where('title', 'LIKE', "%$search%")->orWhere->('body', 'LIKE', "%$search%")->orderBy('create_at', 'DESC')->get();
	}

}