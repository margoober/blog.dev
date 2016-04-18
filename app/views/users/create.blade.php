<?php
$errors;
var_dump($errors);
?>
@extends('layouts.master')
@section('content')
<section class="col-sm-6 col-sm-offset-1">
	<h1>Sign up!</h1>
 	{{ Form::open([
			'action' => 'UsersController@store',
			'method' => 'POST'
			]) }}
		{{ Form::label('first_name', 'First Name') }}
		{{ Form::text('first_name', null, ['class' => 'form-control']) }}
		{{ $errors->first('first_name', '<span class="alert">:message<br></span>') }}
		{{ Form::label('last_name', 'Last Name') }}
		{{ Form::text('last_name', null, ['class' => 'form-control']) }}
		{{ $errors->first('last_name', '<span class="alert">:message<br></span>') }}
		{{ Form::label('username', 'Username') }}
		{{ Form::text('username', null, ['class' => 'form-control']) }}
		{{ $errors->first('username', '<span class="alert">:message<br></span>') }}
		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', null, ['class' => 'form-control']) }}
		{{ $errors->first('email', '<span class="alert">:message<br></span>') }}
		{{ Form::label('password', 'Password') }}
		{{ Form::text('password', null, ['class' => 'form-control']) }}
		{{ $errors->first('password', '<span class="alert">:message<br></span>') }}
		{{ Form::label('confirm_password', 'Confirm Password') }}
		{{ Form::text('confirm_password', null, ['class' => 'form-control']) }}
		{{ $errors->first('confirm_password', '<span class="alert">:message<br></span>') }}
		<br>
		{{ Form::submit('Sign up!', ['class' => 'btn btn-success']) }}
	{{ Form::close() }}
	<h3><a href="{{{ action('PostsController@index')}}}"><button type="button" class="btn btn-primary">Back to Listings</button></a></h3>
</section>


@stop