@extends('layouts.master')
@section('content')
	<h1>All Posts</h1>

	@foreach($allPosts as $post)
		<h2><a href="{{{ action('PostsController@update', $post->id) }}}" }}}>{{{ $post->title }}}</a></h2>
		<p>{{{ $post->body }}}</p>
	@endforeach
	<br>
	<h4>{{ $allPosts->links(); }}</h4>

	<h3><a href="{{{ action('PostsController@create')}}}">Create a New Post!</a></h3>
@stop