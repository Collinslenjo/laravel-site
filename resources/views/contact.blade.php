@extends('layout.app')

@section('content')


<div class="row">
	<div class="col-md-12">
		<div class="page-title">
			<h2>Contact</h2>
		</div>
		<div class="col-md-6">
			<form action="" method="post">
				<label for="name">Name</label><br>
				<input type="text" name="name"><br>
				<label for="email">Email</label><br>
				<input type="email" name="email"><br>
				<label for="message">Message</label><br>
				<textarea name="message" id="message" cols="30" rows="10"></textarea><br><br>
				<button type="submit" class="btn btn-primary">Send</button>
			</form>
		</div>
	</div>
</div>


@endsection