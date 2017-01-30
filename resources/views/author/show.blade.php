@extends('layouts.app')

@section('title')
<div class="row">
	<div class="col-sm-10">
			({{$author->id}}) {{$author->name}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-default" href="{{action('AuthorController@edit', $author->id)}}">Bewerken</a>
	</div>
	<div class="col-sm-1">
			{!! Form::open(['route' => ['author.destroy', $author->id], 'method'=>'DELETE']) !!}
			{!! Form::submit('Verwijderen', array('class'=>'btn btn-danger')) !!}
			{!! Form::close() !!}
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-1">ID</th>
		<th class="col-sm-4">Naam</th>
	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;"
			data-href="{{action('AuthorController@show', ['id' => $author->id]) }}">
			<td class="table-text">{{ $author->id }}</td>
			<td class="table-text">{{ $author->name }}</td>
		</tr>
	</tbody>
</table>
@endsection
