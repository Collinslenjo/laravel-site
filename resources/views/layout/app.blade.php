<!DOCTYPE html>
<html>
<head>
	<title>Larasite</title>
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/custom.css') }}">
</head>
<body>
<div id="app">

<!-- Navbar -->
@include('inc.navbar')


<div class="container-fluid">
@if(Request::is('/'))
@include('inc.showcase')
@endif
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

<footer id="footer" class="text-center">
	<p>copyright 2017 &copy; <a href="https://twitter.com/collo_scream">collinslenjo</a></p>
</footer>

</div>
<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>