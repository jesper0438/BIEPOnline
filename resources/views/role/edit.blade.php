@extends('layouts.app')

@section('title')
	Bewerk {{ $role->name }}
@endsection

@section('content')
{!! Form::model($role, ['route' => ['role.update', $role->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="form-group">
		<div class="col-sm-12">
			{!! Form::label('name', 'Naam*', ['class' => 'control-label']) !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'De naam hier']) !!}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-primary">
				Opslaan
			</button>
		</div>
	</div>
</div>
{!! Form::close() !!}

@endsection
