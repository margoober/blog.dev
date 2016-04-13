@extends('layouts.master')
@section('content')

<h1>{{{ $post->title }}}</h1>
<h2>{{{ $post->body }}}</h2>
<h2><a href="{{{ action('PostsController@edit', $post->id) }}}">Edit Your Post!</a></h2>

@stop