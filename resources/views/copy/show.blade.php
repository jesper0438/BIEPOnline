@extends('layouts.app')
@section('pagetitle', 'Exemplaren')

@section('title')
<div class="row">
	<div class="col-sm-9">
		{{$copy->book->title}}
	</div>
	<div class="col-sm-2">
		 <a class="btn btn-primary" href="{{action('CopyController@edit', $copy->id)}}">Bewerken</a>
	</div>
		<script>
			function confirmDelete() {
		var result = confirm('Weet je zeker dat je dit exemplaar wilt verwijderen?');
		if (result) {
		        return true;
		    } else {
		        return false;
		    }
		}
			</script>
	<div class="col-sm-1">
		{!! Form::open(['method' => 'DELETE', 'route' => ['copy.destroy', $copy->id], 'onsubmit' => 'return confirmDelete()']) !!}
	<button type="submit" name="button" class="btn btn-default btn-sm">
			<i class="fa fa-trash-o"></i>
	</button>
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-4">Datum gekocht</th>
		<th class="col-sm-2">Staat</th>
	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;"
			data-href="{{action('CopyController@show', ['id' => $copy->id]) }}">
			<td class="table-text">{{ $copy->datebought }}</td>
			<td class="table-text">{{ $copy->state }}</td>
		</tr>
	</tbody>
</table>
@endsection
