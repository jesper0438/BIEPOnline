@extends('layouts.app')
@section('pagetitle', 'Uitlenen')

@section('title')
    <i class="fa fa-arrow-circle-right"></i> Uitlenen
    <div style="float:right">
        <a class="btn btn-success" href="{!! url('loan/create') !!}">
            <i class="fa fa-bt fa-plus" aria-hidden="true"></i> Toevoegen
        </a>
    </div>
@endsection

@section('content')
    <?php use Carbon\Carbon; ?>
    @if (count($loans) > 0)
        <table class="table table-striped table-hover">
            <thead>
            <th class="col-sm-2">Status</th>
            <th class="col-sm-2">Uitleendatum</th>
            <th class="col-sm-2">Verloopdatum</th>
            <th class="col-sm-3">Gebruiker</th>
            <th class="col-sm-3">Titel</th>

            </thead>
            <tbody>
            @foreach ($loans as $loan)
                <tr class="row-link" style="cursor: pointer"
                    data-href="{{action('LoanController@show', ['id' => $loan->id])}}">
                    <td class="table-text">
                        @if (isset($loan->status))
                            {{ $loan->status->statusses_id }}

                        @endif
                    </td>
                    <td class="table-text">{{ $loan->startdate }}</td>
                    <td class="table-text">{{ $loan->expirydate }}</td>
                    <td class="table-text">
                        @if (isset($loan->user))
                            {{ $loan->user->name }}
                        @endif
                    </td>
                    <td class="table-text">
                        @if (isset($loan->copy))
                            {{ $loan->copy->book->title }}
                        @endif
                    </td>
                    <script>
                        function confirmDelete() {
                            var result = confirm('Weet je zeker dat je het boek wilt inleveren?');
                            if (result) {
                                return true;
                            } else {
                                return false;
                            }
                        }
                    </script>
                    <td class="table-text">{!! Form::open(['method' => 'put', 'route' => ['loan.handin', $loan->id], 'onsubmit' => 'return confirmDelete()']) !!}
                        <button type="submit" name="button" class="btn btn-success">
                            <i class="fa fa-bars" aria-hidden="true"></i> Boek inleveren
                        </button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
@section('scripts')
    <script>
        jQuery(document).ready(function ($) {
            $(".row-link").click(function () {
                window.document.location = $(this).data("href");
            });
            $('#cohort-tabs a:first').tab('show') // Select first tab
        });
    </script>
@endsection
