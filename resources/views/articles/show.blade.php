@extends('app')

@section('title')
{{$article->nome}}
@stop

@section('content')
<div class="row">
	<div class="box" class="prodotto">
			<img class="img-responsive" style="width:300px;
	            height:210px;float:left;margin:10px"                      
				src="/images/catalog/{{$article->immagine}}" alt="">
			<h3><font color="blue"><font size="5">{{$article->body}}</font></font></h3>
			     <p class="availability in-stock">Prezzo: € <span>{{$article->prezzo}}</span></p>
			     <p class="availability in-stock">Disponibilità: <span>{{$article->disponibile}}</span></p>
		<div class="clearfix"></div>
	</div>
</div>
@stop			
	    -->



