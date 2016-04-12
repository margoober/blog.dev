@extends('layouts.master')
@section('content')
	<h1>Create a New Post</h1>

	<h2>Post Creation Form</h2>

	<form method="POST" action= {{{action('PostsController@store')}}}>
		<label>Title</label><br>
		<input type="text" name="title" value="{{{ Input::old('title') }}}"><br>
		<label>Content</label><br>
		<textarea name="content">{{{ Input::old('content') }}}</textarea><br>
		<input type="submit" value="Submit">
	</form>
@stop