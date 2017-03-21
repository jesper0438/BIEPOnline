@extends('layouts.app')
@section('pagetitle', 'Gebruikersprofiel')

@section('title')
	Bewerk {{ $user->name }}
@endsection

@section('content')
{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="form-group">
		<div class="col-sm-6">
				{!! Form::label('password', ['class' => 'control-label']) !!}
				{!! Form::password('old_password', ['class'=>'form-control', 'placeholder' => 'Vul hier u oud wachtwoord in']) !!}
		</div>
		<div class="col-sm-6">
				{!! Form::label('password', ['class' => 'control-label']) !!}
				{!! Form::password('new_password', ['class' => 'form-control', 'placeholder' => 'Vul hier u nieuwe wachtwoord in']) !!}
		</div>
		<div class="col-sm-6">
			{!! Form::label('password_confirmation', ['class' => 'control-label']) !!}
			{!! Form::password('new_password_confirmation', ['class'=>'form-control', 'placeholder' => 'Vul hier nogmaals u nieuwe wachtwoord in']) !!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">name
			<button type="submit" class="btn btn-primary">
				Opslaan
			</button>
		</div>
	</div>
{!! Form::close() !!}
@endsection
