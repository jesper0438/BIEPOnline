@extends('layouts.app')
@section('pagetitle', 'Exemplaren')

@section('title')
<div class="row">
	<div class="col-sm-8">
		{{$copy->book->title}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-primary" href="{{action('CopyController@edit', $copy->id)}}">Bewerken</a>
	</div>
	<script>
			function confirmDelete() {
		var result = confirm('Weet u zeker dat u dit exemplaar wilt verwijderen?');
		if (result) {
		        return true;
		    } else {
		        return false;
		    }
		}
	</script>
	<div class="col-sm-1">
		{!! Form::open(['method' => 'DELETE', 'route' => ['copy.destroy', $copy->id], 'onsubmit' => 'return confirmDelete()']) !!}
		<button type="submit" name="button" class="btn btn-primary">
			Verwijderen
		</button>
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-3">Datum gekocht</th>
		<th class="col-sm-3">Staat</th>
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
