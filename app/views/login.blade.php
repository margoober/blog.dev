@extends('layouts.master')
@section('content')
<section class="col-sm-6 col-sm-offset-1">
	<h1>Welcome!</h1>
	{{-- 	this array we can pass a bunch of info, like css selectors
 --}}
 	{{ Form::open([
			'action' => 'UsersController@doLogin',
			'method' => 'POST'
			]) }}
		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', null, ['class' => 'form-control', 'value' => 'Input::old']) }}
		{{ $errors->first('email', '<span class="alert">:message<br></span>') }}
		{{ Form::label('password', "Password") }}
		{{ Form::text('password', null, ['class' => 'form-control', 'value' => 'Input::old']) }}
		<br>
		{{ $errors->first('password', '<span class="alert">:message<br></span>') }}
		<br>
		{{ Form::submit('Submit!', ['class' => 'btn btn-success']) }}
	{{ Form::close() }}
	<h2>Session:</h2>

{{-- 	{{var_dump(Session::all())}}
 --}}	{{var_dump(Auth::check())}}

</section>


@stop