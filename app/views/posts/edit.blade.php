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
		{{ Form::submit()}}

	{{ Form::close() }}

	<br>
	{{ Form::open([
			'action' => ['PostsController@destroy', $post->id],
			'method' => 'DELETE'
		]) }}
	{{ Form::submit('Delete') }}
	{{ Form::close() }}
@stop