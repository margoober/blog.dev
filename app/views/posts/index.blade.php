@extends('layouts.master')
@section('content')
	<section class="col-sm-6 col-sm-offset-1">
		<h1>All Posts</h1>
		@foreach($allPosts as $post)
			<h2><a href="{{{ action('PostsController@update', $post->id) }}}" }}}>{{{ $post->title }}}</a></h2>
			<p>{{ $post->body }}</p>
			<p>{{ $post->created_at->format(' h:i A l, F jS Y') }}</p>
		@endforeach
		<h4>{{ $allPosts->links(); }}</h4>

		<h3><a href="{{{ action('PostsController@create')}}}"><button type="button" class="btn btn-primary">Create a New Post!</button></a></h3>
		
		{{-- <h2>Session array:</h2> --}}
		<?php
			// Session::put('logged_in_user', 'Margoober');
			// var_dump(Session::all());
			$user = Session::get('logged_in_user');
		?>
		<h1>{{{ $user }}}</h1>
	</section>
@stop