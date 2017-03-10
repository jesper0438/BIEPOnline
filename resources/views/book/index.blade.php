@extends('layouts.app')
@section('title', 'Boeken')

@section('title')
	<i class="fa fa-book"></i> Boekenadministratie
	<div style="float:right">
		<a class="btn btn-primary" href="{!! url('book/create') !!}">
			Toevoegen...
		</a>
	</div>
@endsection

@section('content')
	@if (count($books) > 0)
		<table class="table table-striped table-hover">
			<thead>
				<th class="col-sm-2">ISBN</th>
				<th class="col-sm-3">Titel</th>
				<th class="col-sm-3">Auteur</th>
				<th class="col-sm-1">Categorie</th>
			</thead>
			<tbody>
				@foreach ($books as $book)
				<tr class="row-link" style="cursor: pointer;"
					data-href="{{action('BookController@show', ['id' => $book->id]) }}">
					<td class="table-text">{{ $book->isbn }}</td>
					<td class="table-text">{{ $book->title }}</td>
					<td class="table-text">{{ $book->author }}</td>
					<td class="table-text">
						@if (isset($book->category))
							{{ $book->category->name }}

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
