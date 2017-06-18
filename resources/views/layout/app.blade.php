<!DOCTYPE html>
<html>
<head>
	<title>Larasite</title>
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
</head>
<body>
<!-- Navbar -->
@include('inc.navbar')

<div class="container">
	<div class="row">
		<!-- Content -->
		<div class="col-md-8 col-lg-8">
			@yield('content')
		</div>

		<!-- Sidebar incleded -->
		<div class="col-md-4 col-lg-4">
			@include('inc.sidebar')
		</div>
	</div>
</div>

<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>