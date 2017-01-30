@extends('layouts.app')

@section('title')
	Uitleenadministratie
	<div style="float:right">
		<a class="btn btn-primary" href="{!! url('loan/create') !!}">
			Toevoegen...
		</a>
	</div>
@endsection

@section('content')
	@if (count($loans) > 0)
		<table class="table table-striped table-hover">
			<thead>
				<th class="col-sm-1">Id</th>
				<th class="col-sm-2">Uitleendatum</th>
				<th class="col-sm-2">Verloopdatum</th>
        <th class="col-sm-2">Terugbrengdatum</th>
				<th class="col-sm-3">Gebruiker</th>
				<th class="col-sm-3">Titel</th>

			</thead>
			<tbody>
				@foreach ($loans as $loan)
				<tr class="row-link" style="cursor: pointer;"
					data-href="{{action('LoanController@show', ['id' => $loan->id]) }}">
					<td class="table-text">{{ $loan->id }}</td>
					<td class="table-text">{{ $loan->startdate }}</td>
					<td class="table-text">{{ $loan->expirydate }}</td>
          <td class="table-text">{{ $loan->returndate }}</td>
					<td class="table-text">
						@if (isset($loan->user))
							{{ $loan->user->name }}
						@endif
					</td>
					<td class="table-text">
						@if (isset($loan->copy))
							{{ $loan->copy->book->title }}
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
