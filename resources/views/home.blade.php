@extends('layout.app')

@section('content')

<h1>Home</h1>

@endsection

@section('sidebar')
	@parent
	<p>this is appended</p>
@endsection