<?php
$errors;
var_dump($errors);
?>
@extends('layouts.master')
@section('content')
<section class="col-sm-6 col-sm-offset-1">
	<h1>Create a New Post</h1>
	{{-- 	this array we can pass a bunch of info, like css selectors
 --}}
 	{{ Form::open([
			'action' => 'PostsController@store',
			'method' => 'POST',
			'files' => true
			]) }}
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', null, ['class' => 'form-control']) }}
		{{ $errors->first('title', '<span class="alert">:message<br></span>') }}
		{{ Form::label('body', "Body") }}
		{{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => '10']) }}
		<br>
		{{ $errors->first('body', '<span class="alert">:message<br></span>') }}
		<br>
		<div class-"form-group">
			{{ Form::label('img', 'Image') }}
			{{ Form::file('img') }}
			{{ $errors->first('img', '<span class="alert">:message<br></span>') }}
		</div>
		<br>
		{{ Form::submit('Submit!', ['class' => 'btn btn-success']) }}
	{{ Form::close() }}
	<h3><a href="{{{ action('PostsController@index')}}}"><button type="button" class="btn btn-primary">Back to Listings</button></a></h3>
</section>


@stop