@extends('layouts.app')
@section('title', 'Auteurs')

@section('title')
	Nieuwe auteur toevoegen
@endsection

@section('tools')
<li role="navigation">
	<a onClick="window.history.back()">
		<i class="fa fa-arrow-left"></i>&nbspTerug
	</a>
</li>
@endsection

@section('content')
<?php use Carbon\Carbon; ?>
{!! Form::open(['route' => ['author.store'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="col-sm-6">
		{!! Form::label('author', 'Auteur', ['class' => 'control-label']) !!}
		{!! Form::text('author', null, ['class' => 'form-control', 'placeholder' => 'Naam van de auteur']) !!}
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
