@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Articles</h1>
@if (count($articles))
<ul>
	@foreach ($articles as $article)
		<user>
			<h2><a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</a><h2>
			<ul>
				<li>{{$article->body}}</li>
				<li>{{$article->codice_prodotto}}</li>	
				<li>{{$article->disponibile}}</li>
				<li>{{$article->prezzo}}</li>				
				<li>{{$article->id}}</li>
			</ul>
		</user>
	@endforeach
</ul>
@else
<p>no articles</p>
@endif

@stop