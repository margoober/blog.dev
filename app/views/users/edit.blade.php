@extends('layouts.master')
@section('content')
	<h1>Edit Your Profile</h1>

	{{ Form::model($user, [ 
		'action' => [
			'UsersController@update',
			$user->id
			],
		'method' => 'PUT'
		]) }}
		<div class="form-group">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, ['class' => 'form-control']) }}
		</div
		{{ $errors->first('title', '<span class="alert">:message<br></span>') }}
		<br>
		{{ Form::label('body', 'Body') }}
		<br>
		{{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => '10']) }}
		<br>
		{{ $errors->first('body', '<span class="alert">:message<br></span>') }}
		<br>
		{{ Form::submit('Submit', ['class' => 'btn btn-success'])}}

	{{ Form::close() }}

	<br>
	{{ Form::open([
			'action' => ['UsersController@destroy', $user->id],
			'method' => 'DELETE'
		]) }}
	{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
	{{ Form::close() }}
@stop