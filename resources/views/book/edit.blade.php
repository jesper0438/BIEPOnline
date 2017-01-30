@extends('layouts.app')

@section('title')
	Bewerk {{ $book->name }}
@endsection

@section('content')
	{!! Form::model($book, ['route' => ['book.update', $book->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
	<div class="col-xs-12">
		<div class="form-group">
			<div class="form-group">
				<div class="col-sm-6">
					{!! Form::label('ISBN', 'ISBN', ['class' => 'control-label']) !!}
					{!! Form::text('ISBN', $book->isbn, ['class' => 'form-control', 'placeholder' => 'ISBN nummer']) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::label('title', 'Titel', ['class' => 'control-label']) !!}
					{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'De titel hier']) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::label('author_id', 'Auteur', ['class' => 'control-label']) !!}
					{!! Form::select('author_id', $authors, null, ['class' => 'form-control']) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::label('category_id', 'Categorie', ['class' => 'control-label']) !!}
					{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Maak een keuze uit de lijst']) !!}
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-primary">
						Opslaan
					</button>
				</div>
			</div>
		</div>
    </div>
{!! Form::close() !!}


@endsection
