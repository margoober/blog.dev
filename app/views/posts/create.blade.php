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
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', null, ['class' => 'form-control']) }}
		{{ $errors->first('title', '<span class="alert">:message<br></span>') }}
		{{ Form::label('body', "Body") }}
		{{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => '10']) }}
		<br>
		{{ $errors->first('body', '<span class="alert">:message<br></span>') }}
		<br>
		{{ Form::submit('Submit!', ['class' => 'btn btn-success']) }}
	{{ Form::close() }}


@stop