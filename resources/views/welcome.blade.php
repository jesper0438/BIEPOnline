  @extends('layouts.app')

@section('title')
    <i class="fa fa-tachometer"></i>&nbsp&nbspDashboard
@endsection

@section('content')

<div>
    @if (App\Copy::count() >= App\Loan::where('returndate','=','')->count()) <!-- Some logic to make sure the counter does not display when the amount of loans is greater than the amount of availible copies. Use Loan::all()->count() if you want to display every entry, not only the ones without a returndate .-->
    <p>Aantal uitgeleende boeken:&nbsp({!! App\Loan::where('returndate','=','')->count(); !!}/{!! App\Copy::all()->count() !!})</p> <!-- The actual displaying part. -->
    @endif
    <p>Aantal leners:&nbsp{!! App\User::where('role_id','=','2')->count(); !!}</p>
    <p>Aantal administrators:&nbsp{!! App\User::where('role_id','=','1')->count(); !!}</p>
</div>

@endsection

@section('scripts')
@endsection
