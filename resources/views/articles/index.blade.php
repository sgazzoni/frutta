@extends('app') @section('title') Index @stop





<!-- 
@if (count($articles))

	@foreach ($articles as $article)
	<div class="prodotto">
		<img src="/images/catalog/{{$article->immagine}}" alt="">
		
		<h1>
			<a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</a>
		</h1>
	</div>

	@endforeach

@else
<p>no articles</p>
@endif 
 -->
@section('content')

<div class="row">
	<div class="box" >
		<div class="col-lg-12">
			<hr>
			<h2 class="intro-text text-center">
				 <strong>I nostri prodotti</strong>
			</h2>
			<hr>
		</div>
		@if (count($articles)) @foreach ($articles as $article)
		<div class="col-xs-2 text-center ">
			<img class="img-responsive" style="width:190px;
	            height:90px;"
				src="/images/catalog/{{$article->immagine}}" alt="">
			<h3><font color="blue"><font size="4">
				<a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</a>
			</font></font></h3>
		</div>
		@endforeach @else
		<p>no articles</p>
		@endif
		<div class="clearfix"></div>
	</div>
</div>
@stop
