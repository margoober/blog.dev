<?php

class PostsController extends BaseController {
	public function index() {
		return View::make('posts.index');
		return "Show a list of all posts";
	}

	public function create(){
		return View::make('posts.create');
		//return "Show a form for creating a post";
	}

	public function store() {
		return "The store method is complete.";
		//return Redirect::back()->withInput();
	}

	public function show($id) {
		return "Show specific post #$id";
	}

	public function edit($id) {
		return "Show a form for editing specific post #$id";
	}

	public function update($id) {
		return "update specific post #$id";
	}

	public function destroy($id) {
		return "delete specific post #$id";
	}

}