@extends('layouts.app')

@section('title')
	Categorieënadministratie
	<div style="float:right">
		<a class="btn btn-primary" href="{!! url('category/create') !!}">
			Toevoegen...
		</a>
	</div>
@endsection

@section('content')
	@if (count($categories) > 0)
		<table class="table table-striped table-hover">
			<thead>
				<th class="col-sm-1">Id</th>
				<th class="col-sm-4">Naam</th>
				<th class="col-sm-2">Kleur</th>
			</thead>
			<tbody>
				@foreach ($categories as $row)
				<tr class="row-link" style="cursor: pointer;"
					data-href="{{action('CategoryController@show', ['id' => $row->id]) }}">
					<td class="table-text">{{ $row->id }}</td>
					<td class="table-text">{{ $row->name }}</td>
					<td class="table-text">{{ $row->color }}</td>
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
