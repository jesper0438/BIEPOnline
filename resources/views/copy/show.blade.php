@extends('layouts.app')

@section('title')
<div class="row">
	<div class="col-sm-10">
			({{$copy->id}}) {{$copy->book->title}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-default" href="{{action('CopyController@edit', $copy->id)}}">Bewerken</a>
	</div>
	<div class="col-sm-1">
			{!! Form::open(['route' => ['copy.destroy', $copy->id], 'method'=>'DELETE']) !!}
			{!! Form::submit('Verwijderen', array('class'=>'btn btn-danger')) !!}
			{!! Form::close() !!}
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-1">ID</th>
		<th class="col-sm-4">Datum gekocht</th>
		<th class="col-sm-2">Staat</th>
	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;"
			data-href="{{action('CopyController@show', ['id' => $copy->id]) }}">
			<td class="table-text">{{ $copy->id }}</td>
			<td class="table-text">{{ $copy->datebought }}</td>
			<td class="table-text">{{ $copy->state }}</td>
		</tr>
	</tbody>
</table>
@endsection
