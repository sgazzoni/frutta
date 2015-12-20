<div class="form-group">
	<font color=”blue”>{!! Form::label('title', 'Title') !!}</font>
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<font color=”blue”>	{!! Form::label('body', 'Body') !!}</font>
	{!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<font color=”blue”>{!! Form::label('codice_prodotto', 'Codice_prodotto')!!}</font>
	{!! Form::text('codice_prodotto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	<font color=”blue”>	{!! Form::label('disponibile', 'Disponibile') !!}</font>
	{!! Form::text('disponibile', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<font color=”blue”>	{!! Form::label('prezzo', 'Prezzo') !!}</font>
	{!! Form::text('prezzo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<font color=”blue”>	{!! Form::label('categoria', 'Categoria') !!}</font>
	{!! Form::text('categoria', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<font color=”blue”>	{!! Form::label('immagine', 'Immagine ') !!}</font>
	<?php if (!$create) { ?>
		<img class="img-responsive img-border-left" src="/images/catalog/{{$article->immagine}}" alt="">
	<?php } ?>
	{!! Form::file('immagine', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>