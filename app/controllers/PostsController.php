<?php

class PostsController extends BaseController {
	public function index() {
		$allPosts = Post::paginate(4);
		return View::make('posts.index')->with(array('allPosts' => $allPosts));
	}

	public function create(){
		return View::make('posts.create');
		//return "Show a form for creating a post";
	}

	public function store() {
		$validator = Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$newPost = new Post();
			$newPost->title = Input::get('title');
			$newPost->body = Input::get('body');
			$newPost->save();
			return Redirect::action('PostsController@show', $newPost->id);
		}
	}

	public function show($id) {
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}

	public function edit($id) {
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}

	public function update($id) {
		$validator = Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$editedPost = Post::find($id);
			$editedPost->title = Input::get('title');
			$editedPost->body = Input::get('body');
			$editedPost->save();
			return Redirect::action('PostsController@show', $editedPost->id);
		}
	}

	public function destroy($id) {
		return "destroying id $id";
	}

}