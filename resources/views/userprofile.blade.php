@extends('layouts.app')
@section('pagetitle', 'Gebruikersprofiel')

@section('title')
    <i class="fa fa-user"></i> {{ Auth::user()->name }}
@endsection

@section('content')

    <!-- User Info -->
    <img id="avatar" src="/uploads/avatars/{{ Auth::user()->avatar }}"><br>
    <br>
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
    <br>
    <form enctype="multipart/form-data" action="/userprofile" method="POST">
        <h2>Profielafbeelding bijwerken</h2><br>
        <input type="file" name="avatar">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class"pull-right btn btn-sm btn-primary">
    </form>
    
@endsection
