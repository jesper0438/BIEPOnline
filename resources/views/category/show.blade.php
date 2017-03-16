@extends('layouts.app')
@section('pagetitle', 'Categorieën')

@section('title')
<div class="row">
	<div class="col-sm-9">
		{{$category->name}}
	</div>
	<div class="col-sm-2">
		 <a class="btn btn-default" href="{{action('CategoryController@edit', $category->id)}}">Bewerken</a>
	</div>
		<script>
			function confirmDelete() {
		var result = confirm('Weet u zeker dat u deze categorie wilt verwijderen?');
		if (result) {
		        return true;
		    } else {
		        return false;
		    }
		}
			</script>
	<div class="col-sm-1">
		{!! Form::open(['method' => 'DELETE', 'route' => ['category.destroy', $category->id], 'onsubmit' => 'return confirmDelete()']) !!}
	<button type="submit" name="button" class="btn btn-default btn-sm">
			<i class="fa fa-trash-o"></i>
	</button>
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-3">Naam</th>
		<th class="col-sm-3">Kleur</th>
	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;" data-href="{{action('CategoryController@show', ['id' => $category->id]) }}">
			<td class="table-text">{{ $category->name }}</td>
			<td class="table-text">{{ $category->color }}</td>
		</tr>
	</tbody>
</table>
@endsection
