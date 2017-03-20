@extends('layouts.app')
@section('pagetitle', 'Gebruikersprofiel')

@section('title')
<div class="row">
	<i class="fa fa-user"></i> {{ Auth::user()->name }}
</div>
<div class="col-sm-2">
	 <a class="btn btn-default" href="{{action('UserProfileController@setPassword', $user->id)}}">Bewerken</a>
</div>
@endsection

@section('content')

<!-- User Info -->
<img id="avatar" src="/uploads/avatars/{{ Auth::user()->avatar }}"><br>
<br>
<form enctype="multipart/form-data" action="/userprofile" method="POST">
<table class="table">
	<label>Update Profile Image</label>
	<input type="file" name="avatar">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" class"pull-right btn btn-sm btn-primary">
</form>
	<tbody>
		<tr>
			<td>Naam</td>
			<td>{{ Auth::user()->name }}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{ Auth::user()->email }}</td>
		</tr>
	</tbody>
</table>

@endsection
