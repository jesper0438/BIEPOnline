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
			{!! Form::password('old_password', ['class'=>'form-control']) !!}
			{!! Form::password('password', ['class'=>'form-control']) !!}
			{!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
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
