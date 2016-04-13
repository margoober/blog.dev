@extends('layouts.master')
@section('content')
	<h1>Edit Your Post</h1>

	{{ Form::model($post, [ 
		'action' => [
			'PostsController@update',
			$post->id
			],
		'method' => 'PUT'
		]) }}

		{{ Form::label('title', 'Title') }}
		<br>

		{{ Form::text('title', null) }}
		<br>

		{{ $errors->first('title', '<span class="alert">:message<br></span>') }}
		<br>

		{{ Form::label('body', 'Body') }}
		<br>
		{{ Form::textarea('body', null, ['rows' => '10', 'cols' => '100']) }}
		<br>

		{{ $errors->first('body', '<span class="alert">:message<br></span>') }}
		<br>

		<input type="submit" value="Submit">

	{{ Form::close() }}

	<br>
		<h3><a href="{{{ action('PostsController@destroy', $post->id) }}}">Delete</a></h3>
@stop