@extends('layout.app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="page-title"><h2>Home</h2></div>
		<div class="banner">
			<img src="{{ elixir('img/nai.jpg') }}">
		</div>
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quam corporis excepturi ducimus nihil reiciendis, iure sequi fugit consequuntur laboriosam aspernatur quidem facilis earum rerum, tenetur natus eos nisi.</p>
		</div>
	</div>
</div>

@endsection

@section('sidebar')

<div class="row">
		@parent
	<p>this is appended</p>
</div>

@endsection