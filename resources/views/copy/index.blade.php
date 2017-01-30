@extends('layouts.app')

@section('title')
	Exemplarenadministratie
	<div style="float:right">
		<a class="btn btn-primary" href="{!! url('copy/create') !!}">
			Toevoegen...
		</a>
	</div>
@endsection

@section('content')
	@if (count($copies) > 0)
		<table class="table table-striped table-hover">
			<thead>

				<th class="col-sm-1">Id</th>
				<th class="col-sm-2">Boek</th>
				<th class="col-sm-4">Datum gekocht</th>
				<th class="col-sm-2">Staat</th>
				<th class="col-sm-2">Locatie</th>

			</thead>
			<tbody>
			@foreach ($copies as $copy)
				<tr class="row-link" style="cursor: pointer;"
					data-href="{{action('CopyController@show', ['id' => $copy->id]) }}">
					<td class="table-text">{{ $copy->id }}</td>
					<td class="table-text">
						@if (isset($copy->book))
							{{ $copy->book->title }}
						@endif
					</td>
					<td class="table-text">{{ $copy->datebought }}</td>
					<td class="table-text">{{ $copy->state }}</td>

					<td class="table-text">
						@if (isset($copy->location))
							{{ $copy->location->name }}
						@endif
					</td>

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
