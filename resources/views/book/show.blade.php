@extends('layouts.app')

@section('title')
<div class="row">
	<div class="col-sm-10">
		({{$book->id}}) {{$book->title}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-default" href="{{action('BookController@edit', $book->id)}}">Bewerken</a>
	</div>
	<div class="col-sm-1">
			{!! Form::open(['route' => ['book.destroy', $book->id], 'method'=>'DELETE']) !!}
			{!! Form::submit('Verwijderen', array('class'=>'btn btn-danger')) !!}
			{!! Form::close() !!}
	</div>
</div>
@endsection

@section('content')
    <div class="col-xs-12">
        <h2>Informatie over dit boek:</h2>
            <table class="table table-striped table-hover">
                <thead>
                <th class="col-sm-1">ID</th>
                <th class="col-sm-4">ISBN</th>
                <th class="col-sm-2">Titel</th>
                <th class="col-sm-2">Auteur</th>
                </thead>
                <tbody>
                <tr class="row-link" style="cursor: pointer;"
                    data-href="{{action('BookController@show', ['id' => $book->id]) }}">
                    <td class="table-text">{{ $book->id }}</td>
                    <td class="table-text">{{ $book->isbn }}</td>
                    <td class="table-text">{{ $book->title }}</td>
                    <td class="table-text">{{ $book->author->name }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-xs-12">
            <h2>Exemplaren van dit boek:</h2>
            @if($book->copies != null)
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Staat van het exemplaar</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($book->copies as $copy)
                        <tr>
                            <td> {{$copy->id}} </td>
                            <td> {{$copy->state}} </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Er zijn geen exemplaren gevonden!</p>
            @endif
        </div>
    </div>
@endsection
