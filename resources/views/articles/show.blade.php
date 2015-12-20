@extends('app')

@section('title')
{{$article->nome}}
@stop

@section('content')
<div class="row">
	<div class="box" class="prodotto">
			<img class="img-responsive" style="width:300px;
	            height:210px;"
				src="/images/catalog/{{$article->immagine}}" alt="ciao"title="Rosmarino biologico in mazzi">
			<h3><font color=”blue”><font size="6">
				{{$article->body}}</font></font></h3>
			    <h3><font color=”green”><font size="5">{{$article->prezzo}}</font></font></h3>
		<div class="product-img-box">
                    <p class="product-image product-image-zoom">
                        <img id="image" src="http://www.lunebuone.it/media/catalog/product/cache/1/image/360x397/9df78eab33525d08d6e5fb8d27136e95/e/x/ex011_rosmarino.jpg" width="360" height="397" alt="Rosmarino biologico in mazzi" title="Rosmarino biologico in mazzi" />                    </p>   
                </div> 
		<div class="clearfix"></div>
	</div>
</div>
@stop



