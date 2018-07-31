@extends('master')

@section('contenu')

<h1>Nouveau Article</h1>
<hr>
{!! Form::open(['url'=>'mvc']) !!}
	<div class="form-group">
	{!! Form::label('titre','Un titre : ') !!}
	{!! Form::text('titre',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('contenu','Un contenu : ') !!}
	{!! Form::textarea('contenu',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	
	{!! Form::submit('Nouveau Article',['class'=>'form-control btn btn-primary']) !!}
	</div>
	
	
{!! Form::close() !!}
@stop