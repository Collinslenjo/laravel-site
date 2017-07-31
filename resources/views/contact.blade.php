@extends('layout.app')

@section('content')


<div class="row">
	<div class="col-md-12">
@include('inc.messages')
		<div class="page-title">
			<h2>Contact</h2>
		</div>
	{!! Form::open(['url' => 'contact/submit']) !!}
	    <div class="form-group">
	    	{{Form::label('name', 'Name')}}
	    	 {{Form::text('name','',['class'=>"form-control",'paceholder'=>'Enter Name'])}}
	    </div>
	    <div class="form-group">
	    	{{Form::label('email', 'E-Mail Address')}}
	    	{{ Form::text('email','',['class'=>"form-control",'paceholder'=>'example@gmail.com'])}}
	    </div>
	    <div class="form-group">
	    	{{Form::label('message', 'Message', ['class' => 'awesome'])}}
	    	{{ Form::textarea('message', '',['class'=>'form-control','placeholder'=>'Enter Message'])}}
	    </div>
	    <div>
	    	{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
	    </div>
	{!! Form::close() !!}		
	</div>
</div>


@endsection