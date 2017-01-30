@extends('layouts.app')

@section('title')
	Locatieadministratie
	<div style="float:right">
		<a class="btn btn-primary" href="{!! url('location/create') !!}">
			Toevoegen...
		</a>
	</div>
@endsection

@section('content')
	@if (count($locations) > 0)
		<table class="table table-striped table-hover">
			<thead>
				<th class="col-sm-1">Id</th>
				<th class="col-sm-4">Naam</th>

			</thead>
			<tbody>
				@foreach ($locations as $location)
				<tr class="row-link" style="cursor: pointer;"
					data-href="{{action('LocationController@show', ['id' => $location->id]) }}">
					<td class="table-text">{{ $location->id }}</td>
					<td class="table-text">{{ $location->name}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endif
@endsection
@section('scripts')
<script>
	jQuery(document).ready(function($) {
	    $(".row-link").click(function() {
	        window.document.location = $(this).data("href");
	    });
	    $('#cohort-tabs a:first').tab('show') // Select first tab
	});
</script>
@endsection
