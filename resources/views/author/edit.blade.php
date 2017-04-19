@extends('layouts.app')
@section('pagetitle', 'Auteurs')

@section('title')
    Bewerk {{ $author->author }}
@endsection

@section('content')
    {!! Form::model($author, ['route' => ['author.update', $author->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
    <div class="col-xs-12">
        <div class="form-group">
            <div class="form-group">
                <div class="col-sm-6">
                    {!! Form::label('author', 'Auteur', ['class' => 'control-label']) !!}
                    {!! Form::text('author', null, ['class' => 'form-control', 'placeholder' => 'Auteur']) !!}
                </div>
            </div>
			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-info">
						Opslaan
					</button>
					<a href="/author" class="btn btn-warning" role="button">Annuleren</a>
				</div>
			</div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
