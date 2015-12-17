@extends('app')

@section('title')
{{$article->nome}}
@stop

@section('content')
<h1><font color=”blue”>{{$article->title}}</font></h1>

<ul>
    <li><font color=”blue”><font size="6">{{$article->body}}</font></font></li>
    <li><font color=”blue”><font size="6">{{$article->codice_prodotto}}</font></font></li>
    <li><font color=”blue”><font size="6">{{$article->disponibile}}</font></font></li>   
    <li><font color=”blue”><font size="6">{{$article->prezzo}}</font></font></li>
    <li><font color=”blue”><font size="6">{{$article->categoria}}</font></font></li>
    <li><font color=”blue”><font size="6">{{$article->immagine}}</font></font></li>    
    <li><img class="img-responsive img-border-left" src="/images/catalog/{{$article->immagine}}" alt=""></li>    
    <li><font color=”blue”>><font size="6">{{$article->id}}</font></font></li>
</ul>
@stop



