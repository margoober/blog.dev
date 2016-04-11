@extends('layouts.master')
@section('content')
	<h1>My Resume!</h1>
	<a href="{{{ action('HomeController@showPortfolio') }}}">My Portfolio</a>
@stop