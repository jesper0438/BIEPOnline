@extends('layouts.app')
@section('title', 'Categorieën')

@section('title')
<div class="row">
	<div class="col-sm-10">
		{{$category->name}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-default" href="{{action('CategoryController@edit', $category->id)}}">Bewerken</a>
	</div>
	<div class="col-sm-1">
			{!! Form::open(['route' => ['category.destroy', $category->id], 'method'=>'DELETE']) !!}
			{!! Form::submit('Verwijderen', array('class'=>'btn btn-danger')) !!}
			{!! Form::close() !!}
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-2">Naam</th>
		<th class="col-sm-2">Kleur</th>
	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;" data-href="{{action('CategoryController@show', ['id' => $category->id]) }}">
			<td class="table-text">{{ $category->name }}</td>
			<td class="table-text">{{ $category->color }}</td>
		</tr>
	</tbody>
</table>
@endsection
