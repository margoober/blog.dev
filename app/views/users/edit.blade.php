@extends('layouts.master')
@section('content')
<section class="col-sm-6 col-sm-offset-1">
	
	<h1>Hi, {{{ $user->username }}}!</h1>
	{{ Form::model($user, [ 
		'action' => [
			'UsersController@update',
			$user->id
			],
		'method' => 'PUT'
		]) }}
		<div class="form-group">
			{{ Form::label('first_name', 'First name') }}
			{{ Form::text('first_name', null, ['class' => 'form-control']) }}
		{{ $errors->first('first_name', '<span class="alert">:message<br></span>') }}
		</div
		<div class="form-group">
			{{ Form::label('last_name', 'Last name') }}
			{{ Form::text('last_name', null, ['class' => 'form-control']) }}
		{{ $errors->first('last_name', '<span class="alert">:message<br></span>') }}
		</div>
		<br>
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', null, ['class' => 'form-control']) }}
		{{ $errors->first('email', '<span class="alert">:message<br></span>') }}
		</div>
		<br>
		
		{{ Form::submit('Update', ['class' => 'btn btn-success'])}}

	{{ Form::close() }}

	<br>
	{{ Form::open([
			'action' => ['UsersController@destroy', $user->id],
			'method' => 'DELETE'
		]) }}
	{{ Form::submit('Delete Account', ['class' => 'btn btn-danger']) }}
	{{ Form::close() }}
</section>
@stop