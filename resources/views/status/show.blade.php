@extends('layouts.app')
@section('pagetitle', 'Statussen')

@section('title')
<div class="row">
	<div class="col-sm-9">
		{{$status->status}}
	</div>
	<div class="col-sm-2">
		 <a class="btn btn-primary" href="{{action('StatusController@edit', $status->id)}}">Bewerken</a>
	</div>
		<script>
			function confirmDelete() {
		var result = confirm('Weet je zeker dat je deze status wilt verwijderen?');
		if (result) {
		        return true;
		    } else {
		        return false;
		    }
		}
			</script>
	<div class="col-sm-1">
		{!! Form::open(['method' => 'DELETE', 'route' => ['status.destroy', $status->id], 'onsubmit' => 'return confirmDelete()']) !!}
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
			data-href="{{action('StatusController@show', ['id' => $status->id]) }}">
			<td class="table-text">{{ $status->status }}</td>
		</tr>
	</tbody>
</table>
@endsection
