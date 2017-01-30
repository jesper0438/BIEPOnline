@extends('layouts.dashboard')
@section('page_heading','<i class="fa fa-check-square-o fa-fw"></i> Aanvraag scholieren registratie')
@section('section')
<div class="col-sm-12">
  @section ('atable_panel_title','Scholieren die wachten op hun goedkeuring voor registratie in het BIEPonline systeem')
  @section ('atable_panel_body')
  <table class="table table-condensed table-bordered table-striped table-responsive small">
  	<thead>
  		<tr>
        <th>Scholier ID</th>
        <th>Voornaam</th>
        <th>Middelnaam</th>
  			<th>Achternaam</th>
  			<th>E-mail adres</th>
        <th>E-mail adres (ouders)</th>
        <th>Telefoonnummer (ouders)</th>
        <th>Geboortedatum</th>
        <th>Goedkeuring</th>
  		</tr>
  	</thead>
  	<tbody>
  		<tr class="">
  			<td>321322</td>
  			<td>Ivo</td>
        <td></th>
  			<td>Zegers</td>
        <td>Ivo.Zegers@gmail.com</td>
        <td>Gerda.zegers@zeelandnet.nl</td>
        <td>0658952321</td>
        <td>19-12-2001</td>
        <td><button type="button" class="btn btn-success">Goedkeuren</button> <button type="button" class="btn btn-warning">Weigeren, want..</button> <button type="button" class="btn btn-danger">Weigeren</button></td>
      </tr>
      <tr class="">
        <td>84516</td>
        <td>Gerrit</td>
        <td></th>
        <td>Aldershof</td>
        <td>Gerrit.Aldershof@gmail.com</td>
        <td>Marloes.aldershof@zeelandnet.nl</td>
        <td>0695958475</td>
        <td>20-12-2002</td>
        <td><button type="button" class="btn btn-success">Goedkeuren</button> <button type="button" class="btn btn-warning">Weigeren, want..</button> <button type="button" class="btn btn-danger">Weigeren</button></td>
      </tr>
      <tr class="">
        <td>8475</td>
        <td>Levi</td>
        <td></th>
        <td>Zuiderduin</td>
        <td>levi.zuiderduin@gmail.com</td>
        <td>peter.zuiderduin@hotmail.com</td>
        <td>0118-543212</td>
        <td>02-12-2003</td>
        <td><button type="button" class="btn btn-success">Goedkeuren</button> <button type="button" class="btn btn-warning">Weigeren, want..</button> <button type="button" class="btn btn-danger">Weigeren</button></td>
      </tr>
      <tr class="">
        <td>442</td>
        <td>Leonard</td>
        <td>van</th>
        <td>Achthoven</td>
        <td>leonard.van.achthoven@hotmail.com</td>
        <td>karin.achthoven@zeelandnet.nl</td>
        <td>0685859585</td>
        <td>01-03-2003</td>
        <td><button type="button" class="btn btn-success">Goedkeuren</button> <button type="button" class="btn btn-warning">Weigeren, want..</button> <button type="button" class="btn btn-danger">Weigeren</button></td>
      </tr>
      <tr class="">
        <td>5213</td>
        <td>Tijn</td>
        <td>van</th>
        <td>Daal</td>
        <td>tijn.van.daal@gmail.com</td>
        <td>ton.van.daal@zeelandnet.nl</td>
        <td>0113-859562</td>
        <td>01-08-1999</td>
        <td><button type="button" class="btn btn-success">Goedkeuren</button> <button type="button" class="btn btn-warning">Weigeren, want..</button> <button type="button" class="btn btn-danger">Weigeren</button></td>
      </tr>
  	</tbody>
  </table>
  @endsection
  @include('widgets.panel', array('header'=>true, 'as'=>'atable'))
</div>


@stop
