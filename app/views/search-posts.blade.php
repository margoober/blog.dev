@extends('layouts.master')
@section('content')
	<section class="col-sm-6 col-sm-offset-1">
		<h1>Search Results for "{{{$search}}}"</h1>
		@foreach($posts as $post)
			<h2><a href="{{{ action('PostsController@update', $post->id) }}}" }}}>{{{ $post->title }}}</a></h2>
			<p>{{ $post->body }}</p>
			<p>Created at {{ $post->created_at->format(' h:i A l, F jS Y') }} by {{{$post->user->username}}}: {{{$post->user->fullName()}}}</p>
		@endforeach
{{-- 		<h4>{{ $posts->links(); }}</h4>
 --}}
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