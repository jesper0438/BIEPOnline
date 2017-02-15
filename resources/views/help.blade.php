  @extends('layouts.app')

@section('title')
    <i class="fa fa-question"></i>&nbsp&nbspHelp
@endsection

@section('content')

<div>
    <p><a href="#"><i class="fa fa-fw fa-envelope-o"></i> Stuur een email naar de beheerder</p></a>
	<p><a href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Bekijk de handleiding</p></a>
</div>

<div>
	<p>BIEPOnline versie {{ config('app.version') }}
</div>

@endsection