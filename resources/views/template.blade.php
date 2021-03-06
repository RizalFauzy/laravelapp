<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel App</title>
		<link rel="stylesheet" type="text/css" href="{{  asset('bootstrap_3_3_7/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{  asset('css/style.css') }}">
		<script type="text/javascript" src="{{ asset('js/html5shiv.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/respond.min.js') }}"></script>
	</head>
	<body>
		<div class="container">
			@include('navbar')
			@yield('main')
		</div>
		@yield('footer')
		<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('bootstrap_3_3_7/js/bootstrap.min.js') }}"></script>
	</body>
</html>