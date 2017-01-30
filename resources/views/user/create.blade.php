@extends('layouts.app')

@section('title')
	Nieuwe gebruiker toevoegen
@endsection

@section('tools')
<li role="navigation">
	<a onClick="window.history.back()">
		<i class="fa fa-arrow-left"></i>&nbspTerug
	</a>
</li>
@endsection

@section('content')
{!! Form::open(['route' => ['user.store'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="col-sm-6">
		{!! Form::label('name', 'Naam*', ['class' => 'control-label']) !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'De naam hier']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Het e-mailadres hier']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('role_id', 'Rol', ['class' => 'control-label']) !!}
		{!! Form::select('role_id', $roles, null, ['class' => 'form-control', 'placeholder' => 'Maak een keuze uit de lijst']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('location_id', 'Locatie', ['class' => 'control-label']) !!}
		{!! Form::select('location_id', $locations, null, ['class' => 'form-control', 'placeholder' => 'Maak een keuze uit de lijst']) !!}
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
