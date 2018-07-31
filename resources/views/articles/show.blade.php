@extends('master')

@section('contenu')
	<h1>Mes Articles show</h1>
	
	<article>
		<h1>{{$acrticle->titre}}</h1>
		<p>
			
			{{ $acrticle->contenu }}
		</p>

	</article>

	

@stop