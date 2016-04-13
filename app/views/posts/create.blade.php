<?php
$errors;
var_dump($errors);
?>
@extends('layouts.master')
@section('content')
	<h1>Create a New Post</h1>

	<h2>Post Creation Form</h2>
	{{-- 	this array we can pass a bunch of info, like css selectors
 --}}
 	{{ Form::open([
			'action' => 'PostsController@store',
			'method' => 'POST'
			]) }}

		<label>Title</label>
		<br>
		<input type="text" name="title" value="{{{ Input::old('title') }}}"><br>
		{{ $errors->first('title', '<span class="alert">:message<br></span>') }}
		<label>Body</label>
		<br>
		<textarea name="body">{{{ Input::old('body') }}}</textarea>
		<br>
		{{ $errors->first('body', '<span class="alert">:message<br></span>') }}
		<input type="submit" value="Submit">
	{{ Form::close() }}





	<h3><a href="{{{ action('PostsController@index') }}}">Back to Index</a></h3>
@stop