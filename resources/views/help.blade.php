@extends('layouts.app')
@section('pagetitle', 'Ondersteuning')

@section('title')
	<i class="fa fa-question"></i> Ondersteuning
@endsection

@section('content')

<!-- Handige links -->
<div>
	<p><a href="#"><i class="fa fa-fw fa-envelope-o"></i> Stuur een email naar de beheerder</p></a>
	<p><a href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Bekijk de handleiding</p></a>
</div>

<!-- Versie voor ondersteuning, variabele staat in config/app.php -->
<div>
	<p>BIEPOnline versie {{ config('app.version') }}
</div>

@endsection
