@extends('layouts.master')
@section('content')
<section class="col-sm-6 col-sm-offset-1">
	<h1>Edit Your Post</h1>

	{{ Form::model(
		$post,
		[ 
			'action' => [
				'PostsController@update',
				$post->id
			],
			'method' =>'PUT',
			'files' => true,
		]) }}
		<div class="form-group">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, ['class' => 'form-control']) }}
		</div
		{{ $errors->first('title', '<span class="alert">:message<br></span>') }}
		<br>
		{{ Form::label('body', 'Body') }}
		<br>
		{{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => '10']) }}
		<br>
		{{ $errors->first('body', '<span class="alert">:message<br></span>') }}
		<table>
			<tr>
				<td>
					<div class-"form-group">
						{{ Form::label('img', 'Image') }}
						{{ Form::file('img') }}
						{{ $errors->first('img', '<span class="alert">:message<br></span>') }}
					</div>
				</td>
				<td>
					<img class="editImage" src="{{$post->img}}">
				</td>
			</tr>
		</table>
		<br>
		{{ Form::submit('Submit', ['class' => 'btn btn-success'])}}

	{{ Form::close() }}

	<br>
	{{ Form::open([
			'action' => ['PostsController@destroy', $post->id],
			'method' => 'DELETE'
		]) }}
	{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
	{{ Form::close() }}
<section class="col-sm-6 col-sm-offset-1">
@stop