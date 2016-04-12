@extends('layouts.master')
@section('top-script')
	<title>Portfolio</title>
@stop
@section('content')
	<h1>My Portfolio!</h1>
	<a href="{{{ action('HomeController@showResume') }}}">My Resume</a>
@stop