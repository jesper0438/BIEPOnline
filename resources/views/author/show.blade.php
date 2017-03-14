@extends('layouts.app')
@section('pagetitle', 'Auteurs')

@section('title')
<div class="row">
	<div class="col-sm-9">
		{{$author->author}}
	</div>
	<div class="col-sm-2">
		 <a class="btn btn-default" href="{{action('AuthorController@edit', $author->id)}}">Bewerken</a>
	</div>
		<script>
			function confirmDelete() {
		var result = confirm('Weet je zeker dat je deze auteur wilt verwijderen?');
		if (result) {
		        return true;
		    } else {
		        return false;
		    }
		}
			</script>
	<div class="col-sm-1">
		{!! Form::open(['method' => 'DELETE', 'route' => ['author.destroy', $author->id], 'onsubmit' => 'return confirmDelete()']) !!}
	<button type="submit" name="button" class="btn btn-default btn-sm">
			<i class="fa fa-trash-o"></i>
	</button>
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-2">Naam</th>

	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;" data-href="{{action('AuthorController@show', ['id' => $author->id]) }}">
			<td class="table-text">{{ $author->author }}</td>
		</tr>
	</tbody>
</table>
@endsection
