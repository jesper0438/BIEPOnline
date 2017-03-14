@extends('layouts.app')
@section('pagetitle', 'Locaties')

@section('title')
<div class="row">
	<div class="col-sm-9">
		{{$location->name}}
	</div>
	<div class="col-sm-2">
		 <a class="btn btn-default" href="{{action('LocationController@edit', $location->id)}}">Bewerken</a>
	</div>
		<script>
			function confirmDelete() {
		var result = confirm('Weet je zeker dat je deze locatie wilt verwijderen?');
		if (result) {
		        return true;
		    } else {
		        return false;
		    }
		}
			</script>
	<div class="col-sm-1">
		{!! Form::open(['method' => 'DELETE', 'route' => ['location.destroy', $location->id], 'onsubmit' => 'return confirmDelete()']) !!}
	<button type="submit" name="button" class="btn btn-default btn-sm">
			<i class="fa fa-trash-o"></i>
	</button>
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
			data-href="{{action('LocationController@show', ['id' => $location->id]) }}">
			<td class="table-text">{{ $location->name }}</td>
		</tr>
	</tbody>
</table>
@endsection
