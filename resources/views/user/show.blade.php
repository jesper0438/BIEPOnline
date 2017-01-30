@extends('layouts.app')

@section('title')
<div class="row">
	<div class="col-sm-10">
			({{$user->id}}) {{$user->name}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-default" href="{{action('UserController@edit', $user->id)}}">Bewerken</a>
	</div>
	<div class="col-sm-1">
			{!! Form::open(['route' => ['user.destroy', $user->id], 'method'=>'DELETE']) !!}
			{!! Form::submit('Verwijderen', array('class'=>'btn btn-danger')) !!}
			{!! Form::close() !!}
	</div>
</div>
@endsection



@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-1">ID</th>
		<th class="col-sm-4">Naam</th>
		<th class="col-sm-2">E-mail</th>
		<th class="col-sm-2">Rol</th>
	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;"
			data-href="{{action('UserController@show', ['id' => $user->id]) }}">
			<td class="table-text">{{ $user->id }}</td>
			<td class="table-text">{{ $user->name }}</td>
			<td class="table-text">{{ $user->email }}</td>
				@if(!empty($user->role->name))
			<td class="table-text">{{ $user->role->name }}</td>
				@endif
		</tr>
	</tbody>
</table>
@endsection
