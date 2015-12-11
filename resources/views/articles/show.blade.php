@extends('app')

@section('title')
{{$article->nome}}
@stop

@section('content')
<h1>{{$article->title}}</h1>
<ul>
	<li>{{$article->body}}</li>
    <li>{{$article->codice_prodotto}}</li>		
    <li>{{$article->disponibile}}</li>    
	<li>{{$article->prezzo}}</li>    
	<li>{{$article->id}}</li>
</ul>
@stop