@extends('layouts.app')
@section('pagetitle', 'Gebruikers')

@section('title')
	Bewerk {{ $user->name }}
@endsection

@section('content')
<form enctype="multipart/form-data" action="{{ url('/user/show') }}" method="POST">
	<label>Veranderen van profielfoto&nbsp</label>
	<input type="file" name="avatar">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" class"pull-right btn btn-sm btn-primary">
</form>
{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="form-group">
		<div class="col-sm-6">
			{!! Form::label('name', 'Naam', ['class' => 'control-label']) !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'De naam hier']) !!}
		</div>
		<div class="col-sm-6">
			{!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Het emailadres hier']) !!}
		</div>
		<div class="col-sm-6">
			{!! Form::label('role_id', 'Rol', ['class' => 'control-label']) !!}
			{!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-sm-6">
			{!! Form::label('location_id', 'Locatie', ['class' => 'control-label']) !!}
			{!! Form::select('location_id', $locations, null, ['class' => 'form-control', 'placeholder' => 'Maak een keuze uit de lijst']) !!}
		</div>
		<div class="col-sm-6">
				{!! Form::label('old_password', 'Huidig wachtwoord', ['class' => 'control-label']) !!}
				{!! Form::password('old_password', ['class'=> 'form-control', 'placeholder' => 'Vul hier het huidige wachtwoord in']) !!}
		</div>
		<div class="col-sm-6">
				{!! Form::label('new_password', 'Nieuw wachtwoord', ['class' => 'control-label']) !!}
				{!! Form::password('new_password', ['class' => 'form-control', 'placeholder' => 'Vul hier het nieuwe wachtwoord in']) !!}
		</div>
		<div class="col-sm-6">
			{!! Form::label('password_confirmation', 'Bevestiging nieuw wachtwoord', ['class' => 'control-label']) !!}
			{!! Form::password('new_password_confirmation', ['class'=>'form-control', 'placeholder' => 'Vul hier nogmaals het nieuwe wachtwoord in']) !!}
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
