<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
@yield('top-script')
</head>
<body>

	@include('partials.navbar')
	@if (Session::has('successMessage'))
		<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
		<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif
	@yield('content')
	<script>
		setTimeout(function() {
			$(".alert-danger").slideUp(2500);
		}, 500);
		setTimeout(function() {
			$(".alert-success").slideUp(2500);
		}, 500);
	</script>
	@yield('bottom-script')
</body>
</html>