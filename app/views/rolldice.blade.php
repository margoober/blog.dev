@extends('layouts.master')

<?php
if ($randnumb == $guess) {
	$score = "RIGHT";
} else {
	$score = "WRONG";
}
?>

@section('content') <!--open master.blade-->

<h1>You guessed a <?= $guess ?>!</h1>
<h1>You rolled a {{{ $randnumb }}}!</h1>
<h2>You were {{{ $score }}}</h2>

<!--BLADE SYNTAX-->
@if($randnumb == $guess)
<h6>Blade syntax says you were right</h6>
@else
<h6>Blade syntax says you were wrong</h6>
	@endif
<h1>Make Your Prediction, and Roll Again!</h1>
<ul>
@foreach([1, 2, 3, 4, 5, 6] as $number)
	<h2><li>
		<a href="{{{action('HomeController@rolldice', $number)}}}">{{{$number}}}</a>
	</li></h2>
@endforeach
</ul>
@stop <!--close master.blade-->

@section('bottom-script')
	<script type="text/javascript"></script>
@stop