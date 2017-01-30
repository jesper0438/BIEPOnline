@extends('layouts.app')

@section('title')
<div class="row">
	<div class="col-sm-10">
			({{$role->id}}) {{$role->name}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-default" href="{{action('RoleController@edit', $role->id)}}">Bewerken</a>
	</div>
	<div class="col-sm-1">
			{!! Form::open(['route' => ['role.destroy', $role->id], 'method'=>'DELETE']) !!}
			{!! Form::submit('Verwijderen', array('class'=>'btn btn-danger')) !!}
			{!! Form::close() !!}
	</div>
</div>
@endsection

@section('content')
<div class="row">
</div>
@if (count($role->users) > 0)
	<table class="table table-striped table-hover">
		<thead>
		<th class="col-sm-1">Id</th>
		<th class="col-sm-4">Naam</th>
		<th class="col-sm-2">E-mail</th>
		</thead>
		<tbody>
		{{-- table which shows all users associated with the role --}}
		@foreach ($role->users as $user)
			<tr class="row-link" style="cursor: pointer;"
				data-href="{{action('UserController@show', ['id' => $user->id]) }}">
				<td class="table-text">{{ $user->id }}</td>
				<td class="table-text">{{ $user->name }}</td>
				<td class="table-text"><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
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
