<?php var_dump($user->username) ?>
@extends('layouts.master')
@section('content')

<section class="col-sm-6 col-sm-offset-1">
	<h1>Hi, {{{ $user->username }}}!</h1>

	<h2>{{ $user->first_name . " " . $user->last_name }}</h2>
	<h2>{{ $user->email }}</h2>

	<h3><a href="{{{ action('UsersController@edit', $user->id)}}}"><button type="button" class="btn btn-warning">Edit!</button></a></h3>

	<h3><a href="{{{ action('PostsController@index')}}}"><button type="button" class="btn btn-primary">Back to Listings</button></a></h3>
</section>

@stop