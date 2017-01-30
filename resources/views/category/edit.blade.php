@extends('layouts.app')

@section('title')
	Bewerk {{ $category->name }}
@endsection

@section('content')
{!! Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="form-group">
		<div class="col-sm-6">
			{!! Form::label('name', 'Naam*', ['class' => 'control-label']) !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'De naam hier']) !!}
		</div>
		<div class="col-sm-6">
			{!! Form::label('color', 'Kleur', ['class' => 'control-label']) !!}
			{!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => 'De kleur hier']) !!}
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
