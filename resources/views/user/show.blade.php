@extends('layouts.app')
@section('pagetitle', 'Gebruikers')

@section('title')
<div class="row">
	<div class="col-sm-8">
		{{$user->name}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-primary" href="{{action('UserController@edit', $user->id)}}">Bewerken</a>
	</div>
	<script>
			function confirmDelete() {
		var result = confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?');
		if (result) {
		        return true;
		    } else {
		        return false;
		    }
		}
	</script>
	<div class="col-sm-1">
		{!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id], 'onsubmit' => 'return confirmDelete()']) !!}
		<button type="submit" name="button" class="btn btn-primary">
			Verwijderen
		</button>
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-3">Naam</th>
		<th class="col-sm-3">Email</th>
		<th class="col-sm-2">Rol</th>
	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;"
			data-href="{{action('UserController@show', ['id' => $user->id]) }}">
			<td class="table-text">{{ $user->name }}</td>
			<td class="table-text">{{ $user->email }}</td>
				@if(!empty($user->role->name))
			<td class="table-text">{{ $user->role->name }}</td>
				@endif
		</tr>
	</tbody>
</table>
@endsection
