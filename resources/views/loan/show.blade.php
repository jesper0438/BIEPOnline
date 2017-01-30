@extends('layouts.app')

@section('title')
<div class="row">
	<div class="col-sm-10">
				({{$loan->id}}) {{$loan->copy->book->title}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-default" href="{{action('LoanController@edit', $loan->id)}}">Bewerken</a>
	</div>
	<div class="col-sm-1">
				{!! Form::open(['route' => ['loan.destroy', $loan->id], 'method'=>'DELETE']) !!}
				{!! Form::submit('Verwijderen', array('class'=>'btn btn-danger')) !!}
				{!! Form::close() !!}
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-2">ID</th>
		<th class="col-sm-3">Uitleendatum</th>
		<th class="col-sm-3">Verloopdatum</th>
		<th class="col-sm-3">Terugbrengdatum</th>
	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;"
			data-href="{{action('LoanController@show', ['id' => $loan->id]) }}">
			<td class="table-text">{{ $loan->id }}</td>
			<td class="table-text">{{ $loan->startdate }}</td>
			<td class="table-text">{{ $loan->expirydate }}</td>
			<td class="table-text">{{ $loan->returndate }}</td>
		</tr>
	</tbody>
</table>
@endsection
