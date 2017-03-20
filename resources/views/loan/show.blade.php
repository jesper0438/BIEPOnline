@extends('layouts.app')
@section('pagetitle', 'Uitlenen')

@section('title')
<div class="row">
	<div class="col-sm-8">
		Uitleen #{{$loan->id}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-primary" href="{{action('LoanController@edit', $loan->id)}}">Bewerken</a>
	</div>
	<script>
			function confirmDelete() {
		var result = confirm('Weet je zeker dat je deze uitleen wilt verwijderen?');
		if (result) {
		        return true;
		    } else {
		        return false;
		    }
		}
	</script>
	<div class="col-sm-1">
		{!! Form::open(['method' => 'DELETE', 'route' => ['loan.destroy', $loan->id], 'onsubmit' => 'return confirmDelete()']) !!}
		<button type="submit" name="button" class="btn btn-primary">
			Verwijderen
		</button>
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-3">Uitleendatum</th>
		<th class="col-sm-3">Verloopdatum</th>
		<th class="col-sm-3">Terugbrengdatum</th>
	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;"
			data-href="{{action('LoanController@show', ['id' => $loan->id]) }}">
			<td class="table-text">{{ $loan->startdate }}</td>
			<td class="table-text">{{ $loan->expirydate }}</td>
			<td class="table-text">{{ $loan->returndate }}</td>
		</tr>
	</tbody>
</table>
@endsection
