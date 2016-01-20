@extends('app')

@section('title')
{{$article->nome}}
@stop

@section('content')
<div class="row2">
	<div class="box" >
			<img class="img-responsive" style="width:300px;
	            height:210px;float:left;margin:10px"                      
				src="/images/catalog/{{$article->immagine}}" alt="">
			<h3><font color="blue"><font size="5">{{$article->body}}</font></font></h3>
			     <p class="availability in-stock">Prezzo: € <span>{{$article->prezzo}}</span></p>
			     <p class="availability in-stock">Disponibilità: <span>{{$article->disponibile}}</span></p>
		<div class="clearfix"></div>
		

			<ul class="pager">
		  			<li><a href="{{URL::to('articles')}}">Precedente</a></li>			  		  			  
			</ul>		
		
	</div>
</div>
@stop			
	    -->



