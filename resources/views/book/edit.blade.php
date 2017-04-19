@extends('layouts.app')
@section('pagetitle', 'Boeken')

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
					{!! Form::text('ISBN', $book->isbn, ['class' => 'form-control', 'placeholder' => 'ISBN nummer van het boek']) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::label('title', 'Titel', ['class' => 'control-label']) !!}
					{!! Form::text('title', $book->title, ['class' => 'form-control', 'placeholder' => 'De titel wordt automatisch aangevuld']) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::label('author', 'Auteur', ['class' => 'control-label']) !!}
					{!! Form::text('author', $book->author, ['class' => 'form-control', 'placeholder' => 'De auteur wordt automatisch aangevuld']) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::label('category_id', 'Categorie', ['class' => 'control-label']) !!}
					{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Maak een keuze uit de lijst']) !!}
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-info">
						Opslaan
					</button>
					<a href="/book" class="btn btn-warning" role="button">Annuleren</a>
				</div>
			</div>
		</div>
    </div>
{!! Form::close() !!}
@endsection

@section('scripts')
<script type="text/javascript">
	$("#isbn").on('change', function() {
		var isbn = $(this).val();
		if (isbn.length > 9 && isbn.length < 14) {
			console.log(isbn);
			getBookData(isbn);
		}
	});
	function getBookData(isbn) {
		$.ajax({
        url: "https://www.googleapis.com/books/v1/volumes?q="+isbn
    }).then(function(data) {
       $('#title').val(data.items[0].volumeInfo.title);
       $('#author').val(data.items[0].volumeInfo.authors);
    });
	}
</script>
@endsection
