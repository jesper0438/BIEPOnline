@extends('layouts.app')
@section('pagetitle', 'Statussen')

@section('title')
<div class="row">
	<div class="col-sm-10">
			{{$status->name}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-default" href="{{action('StatusController@edit', $status->id)}}">Bewerken</a>
	</div>
	<div class="col-sm-1">
			{!! Form::open(['route' => ['status.destroy', $status->id], 'method'=>'DELETE']) !!}
			{!! Form::submit('Verwijderen', array('class'=>'btn btn-danger')) !!}
			{!! Form::close() !!}
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-4">Naam</th>
	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;"
			data-href="{{action('StatusController@show', ['id' => $status->id]) }}">
			<td class="table-text">{{ $status->status }}</td>
		</tr>
	</tbody>
</table>
@endsection
