@extends('layouts.app')

@section('title')
	Nieuw boek toevoegen
@endsection

@section('tools')
<li role="navigation">
	<a onClick="window.history.back()">
		<i class="fa fa-arrow-left"></i>&nbspTerug
	</a>
</li>
@endsection

@section('content')
{!! Form::open(['route' => ['book.store'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="col-sm-6">
		{!! Form::label('isbn', 'ISBN', ['class' => 'control-label']) !!}
		{!! Form::text('isbn', null, ['class' => 'form-control', 'placeholder' => 'ISBN Nummer']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('title', 'Titel', ['class' => 'control-label']) !!}
		{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'De titel hier']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('author_id', 'Auteur', ['class' => 'control-label']) !!}
		{!! Form::select('author_id', $authors, null, ['class' => 'form-control', 'placeholder' => 'Maak een keuze uit de lijst']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('category_id', 'Categorie', ['class' => 'control-label']) !!}
		{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Maak een keuze uit de lijst']) !!}
	</div>

</div>

<div class="form-group">
	<div class="col-sm-12">
		<button type="submit" class="btn btn-primary">
			Opslaan
		</button>
	</div>
</div>
{!! Form::close() !!}
@endsection
