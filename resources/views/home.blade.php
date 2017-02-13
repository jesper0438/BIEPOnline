  @extends('layouts.app')

@section('title')
    <i class="fa fa-tachometer"></i>&nbsp&nbspDashboard
@endsection

@section('content')

<div>
    @if (App\Copy::count() >= App\Loan::where('returndate','=','')->count())
    <p>Aantal uitgeleende boeken:&nbsp({!! App\Loan::where('returndate','=','')->count(); !!}/{!! App\Copy::all()->count() !!})</p>
    @endif
    <p>Aantal leners:&nbsp{!! App\User::where('role_id','=','2')->count(); !!}</p>
    <p>Aantal administrators:&nbsp{!! App\User::where('role_id','=','1')->count(); !!}</p>
</div>

@endsection
