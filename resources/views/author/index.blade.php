@extends('layouts.app')

@section('title')
	<i class="fa fa-university"></i>&nbsp&nbspAuteurs
	<div style="float:right">
		<a class="btn btn-primary" href="{!! url('author/create') !!}">
			Toevoegen...
		</a>
	</div>
@endsection

@section('content')
  @if (count($authors) > 0)
		<table class="table table-striped table-hover">
			<thead>
				<th class="col-sm-3">Naam</th>

			</thead>
			<tbody>
				@foreach ($authors as $row)
				<tr class="row-link" style="cursor: pointer;"
					data-href="{{action('AuthorController@show', ['id' => $row->id]) }}">
					<td class="table-text">{{ $row->author }}</td>

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
