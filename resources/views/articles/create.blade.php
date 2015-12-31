@extends('app')

@section('title')
New article
@stop
						
@section('content')
<h1><font color="blue">Nuovo Prodotto</font></h1>
<hr />
{!! Form::model($article = new \App\Article, array('action' => 'ArticlesController@index', 'files' => true)) !!}
	@include('articles.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop