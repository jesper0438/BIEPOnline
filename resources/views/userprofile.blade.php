  @extends('layouts.app')

@section('title')
    <i class="fa fa-user"></i>&nbsp&nbsp{{ Auth::user()->name }}
@endsection

@section('content')

<!-- User info -->
<table class="table">
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
