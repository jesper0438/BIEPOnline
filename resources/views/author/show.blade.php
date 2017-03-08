@extends('layouts.app')

@section('title')
<div class="row">
	<div class="col-sm-10">
		{{$author->name}}
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
		<th class="col-sm-2">Naam</th>
	</thead>
	<tbody>

		<table class="table table-striped table-hover">
			<thead>
				<th class="col-sm-2">Titel boek</th>
				<th class="col-sm-2">Titel boek</th>
				<th class="col-sm-2">Status</th>
				<th class="col-sm-2">Reserveren</th>
				<th class="col-sm-2">Aantal</th>
			</thead>
			<tbody>
				<tr class="row-link" style="cursor: pointer;" data-href="{{action('BookController@show', ['id' => $book->id]) }}">
					<td class="table-text">{{ $book->title }}</td>
					<td class="table-text">{{ }}</td>
					<td class="table-text">{{ }}</td>
					<td class="table-text">{{ }}</td>
				</tr>

	</tbody>
</table>
@endsection
