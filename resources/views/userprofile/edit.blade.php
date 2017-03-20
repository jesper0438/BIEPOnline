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
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Hier je nieuwe wachtwoord']) !!}
		</div>
		<div class="col-sm-6">
			{!! Form::label('password_confirmation', ['class' => 'control-label']) !!}
			{!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder' => 'Hier nogmaals je nieuwe wachtwoord']) !!}
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
