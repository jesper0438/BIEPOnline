@extends('layouts.app')
@section('pagetitle', 'Gebruikers')

@section('title')
<div class="row">
	<div class="col-sm-9">
		{{$user->name}}
	</div>
	<div class="col-sm-2">
		 <a class="btn btn-default" href="{{action('UserController@edit', $user->id)}}">Bewerken</a>
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
	<button type="submit" name="button" class="btn btn-default btn-sm">
			<i class="fa fa-trash-o"></i>
	</button>
	</div>
</div>
@endsection

@section('content')
<img id="avatar" src="/uploads/avatars/{{ Auth::user()->avatar }}"><br>
<br>
<table class="table">
	<tbody>
		<tr>
			<td><b>Naam</b></td>
			<td>{{ Auth::user()->name }}</td>
		</tr>
		<tr>
			<td><b>Email</b></td>
			<td>{{ Auth::user()->email }}</td>
		</tr>
		<tr>
			<td><b>Rol</b></td>
				@if(!empty($user->role->name))
			<td>{{ Auth::user()->role->name }}</td>
				@endif
		</tr>
		<tr>
			<td><b>Locatie</b></td>
			<td>{{ Auth::user()->location->name }}</td>
		</tr>
	</tbody>
</table>
<p>Klik op Bewerken om de gegevens te wijzigen.</p>
@endsection
