@extends('layouts.app')
@section('pagetitle', 'Status')

@section('title')
	Bewerk {{ $status->status }}
@endsection

@section('content')
{!! Form::model($status, ['route' => ['status.update', $status->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="form-group">
		<div class="col-sm-6">
			{!! Form::label('status', 'Naam', ['class' => 'control-label']) !!}
			{!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'De naam hier']) !!}
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
