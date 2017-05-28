@extends('layout.app')

@section('content')

<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat cumque quam corporis excepturi ducimus nihil reiciendis, iure sequi fugit consequuntur laboriosam aspernatur quidem facilis earum rerum, tenetur natus eos nisi.</p>

@endsection

@section('sidebar')
	@parent
	<p>this is appended</p>
@endsection