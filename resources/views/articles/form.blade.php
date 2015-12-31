<div class="form-group">
	<p class="testoform">{!! Form::label('title', 'Title') !!}</p>
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<p class="testoform">	{!! Form::label('body', 'Body') !!}</p>
		{!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<p class="testoform">{!! Form::label('codice_prodotto', 'Codice_prodotto')!!}</p>
	{!! Form::text('codice_prodotto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	<p class="testoform">	{!! Form::label('disponibile', 'Disponibile') !!}</p>
	{!! Form::text('disponibile', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<p class="testoform">	{!! Form::label('prezzo', 'Prezzo') !!}</p>
	{!! Form::text('prezzo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<p class="testoform">	{!! Form::label('categoria', 'Categoria') !!}</p>
	{!! Form::text('categoria', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<p class="testoform">	{!! Form::label('immagine', 'Immagine ') !!}</p>
	<?php if (!$create) { ?>
		<img class="img-responsive img-border-left" src="/images/catalog/{{$article->immagine}}" alt="">
	<?php } ?>
	{!! Form::file('immagine', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>