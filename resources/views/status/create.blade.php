@extends('layouts.app')
@section('pagetitle', 'Statussen')

@section('title')
	Nieuwe status toevoegen
@endsection

@section('tools')
<li role="navigation">
	<a onClick="window.history.back()">
		<i class="fa fa-arrow-left"></i>&nbspTerug
	</a>
</li>
@endsection

@section('content')
{!! Form::open(['route' => ['status.store'], 'method' => 'post', 'class' => 'form-horizontal']) !!}
<div class="form-group">
	<div class="col-sm-6">
		{!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
		{!! Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'De status benaming']) !!}
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
