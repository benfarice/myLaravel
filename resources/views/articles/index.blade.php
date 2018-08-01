@extends('master')

@section('contenu')
	<h1>Mes Articles</h1>
	@foreach($articles as $acrticle)
	<article>
		<a href="{{ url('mvc',['id'=>$acrticle->id])}}">
		<h2>{{$acrticle->titre}}</h2>
		</a>
		<p>
			
			{{ substr($acrticle->contenu,0,150) }}
		</p>

	</article>

	@endforeach


<div class="row">
	<div class="col-md-12">
		{!! $articles->render() !!}
	</div>

</div>



@stop