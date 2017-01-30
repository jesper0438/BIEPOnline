@extends('layouts.app')

@section('title')
	Auteursadministratie
	<div style="float:right">
		<a class="btn btn-primary" href="{!! url('author/create') !!}">
			Toevoegen...
		</a>
	</div>
@endsection

@section('content')
	@if (count($author) > 0)
		<table class="table table-striped table-hover">
			<thead>
				<th class="col-sm-1">Id</th>
				<th class="col-sm-4">Naam</th>
			</thead>
			<tbody>
				@foreach ($author as $row)
				<tr class="row-link" style="cursor: pointer;"
					data-href="{{action('AuthorController@show', ['id' => $row->id]) }}">
					<td class="table-text">{{ $row->id }}</td>
					<td class="table-text">{{ $row->name }}</td>
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
