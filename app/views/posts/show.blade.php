@extends('layouts.master')
@section('content')

<section class="col-sm-6 col-sm-offset-1">
	<h1>{{{ $post->title }}}</h1>
	<p>Created at {{{ $post->created_at->format('h:i A l, F jS Y') }}} by {{{ $post->user->username }}}</p>

	@if($post->created_at != $post->updated_at)
		<p>Last updated at {{{$post->updated_at->format('h:i A l, F jS Y') }}}</p>
	@endif

	<h2>{{ $post->body }}</h2>
	<h3><a href="{{{ action('PostsController@edit', $post->id)}}}"><button type="button" class="btn btn-warning">Edit!</button></a></h3>

	<h3><a href="{{{ action('PostsController@index')}}}"><button type="button" class="btn btn-primary">Back to Listings</button></a></h3>
</section>

@stop