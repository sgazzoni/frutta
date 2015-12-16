<div class="form-group">
	{!! Form::label('title', 'Title') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('body', 'Body') !!}
	{!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('codice_prodotto', 'Codice_prodotto') !!}
	{!! Form::text('codice_prodotto', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('disponibile', 'Disponibile') !!}
	{!! Form::text('disponibile', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('prezzo', 'Prezzo') !!}
	{!! Form::text('prezzo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('categoria', 'Categoria') !!}
	{!! Form::text('categoria', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('immagine', 'Immagine ') !!}
	{!! Form::file('immagine', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>