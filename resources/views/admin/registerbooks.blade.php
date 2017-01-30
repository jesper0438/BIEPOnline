@extends('layouts.dashboard')
@section('page_heading','<i class="fa fa-th-list fa-fw"></i> Geregistreerde Boeken')
@section('section')
<div class="col-sm-3">
      <input type="text" class="form-control" data-form-field="" placeholder="Vul hier een zoekterm in (titel, isbn, etc.)">
    </div>
<div class="col-sm-12">
  @section ('atable_panel_title','Alle geregistreerde boeken, ')
  @section ('atable_panel_body')
  <table class="table table-condensed table-bordered table-striped table-responsive small">
    <thead>
      <tr>
        <th>Titel</th>
        <th>Auteur</th>
        <th>ISBN</th>
        <th>Uitgever</th>
        <th>Aantal</th>
        <th>Aantal in gebruik</th>
        <th>Aantal gereserveerd</th>
      </tr>
    </thead>
    <tbody>
      <tr class="">
        <td>*Voorbeeld Titel*</td>
        <td>*Voorbeeld Auteur*</td>
        <td>*Voorbeeld ISBN*</th>
        <td>*Voorbeeld Uitgever*</td>
        <td>*Voorbeeld Aantal*</td>
        <td>*Voorbeeld Aantal*</td>
        <td>*Voorbeeld Aantal*</td>
      <tr class="">
        <td>*Voorbeeld Titel*</td>
        <td>*Voorbeeld Auteur*</td>
        <td>*Voorbeeld ISBN*</th>
        <td>*Voorbeeld Uitgever*</td>
        <td>*Voorbeeld Aantal*</td>
        <td>*Voorbeeld Aantal*</td>
        <td>*Voorbeeld Aantal*</td>
      <tr class="">
        <td>*Voorbeeld Titel*</td>
        <td>*Voorbeeld Auteur*</td>
        <td>*Voorbeeld ISBN*</th>
        <td>*Voorbeeld Uitgever*</td>
        <td>*Voorbeeld Aantal*</td>
        <td>*Voorbeeld Aantal*</td>
        <td>*Voorbeeld Aantal*</td>
      <tr class="">
        <td>*Voorbeeld Titel*</td>
        <td>*Voorbeeld Auteur*</td>
        <td>*Voorbeeld ISBN*</th>
        <td>*Voorbeeld Uitgever*</td>
        <td>*Voorbeeld Aantal*</td>
        <td>*Voorbeeld Aantal*</td>
        <td>*Voorbeeld Aantal*</td>
      </tr>
    </tbody>
    </table>
    @endsection
    @include('widgets.panel', array('header'=>true, 'as'=>'atable'))
  </div>



  @stop
