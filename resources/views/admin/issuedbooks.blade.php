@extends('layouts.dashboard')
@section('page_heading','<i class="fa fa-random fa-fw"></i> Boeken nu in omloop')
@section('section')
<div class="col-sm-12">
  @section ('atable_panel_title','Boeken nu in omloop')
  @section ('atable_panel_body')
  <table class="table table-condensed table-bordered table-striped">
  	<thead>
  		<tr>
        <th>Uitgifte ID</th>
        <th>Boek ID</th>
  			<th>ISBN nummer</th>
  			<th>Titel Boek</th>
        <th>Scholier ID</th>
        <th>Naam scholier</th>
        <th>Datum uitgifte</th>
        <th>(Verwachte) datum retour</th>
        <th>Status </th>
  		</tr>
  	</thead>
  	<tbody>
  		<tr class="danger">
  			<td>1</td>
  			<td>22</td>
  			<td>9789001712174</td>
        <td>Effectief handelen door reflectie, bekwamer worden als professional</td>
        <td>889977</td>
        <td>Bert Franken</td>
        <td>16-november 2016</td>
        <td>30-november 2016</td>
        <td><button type="button" class="btn btn-danger     disabled">Te laat</button></td>
      </tr>
      <tr class="danger">
        <td>2</td>
        <td>30</td>
        <td>9789460772801</td>
        <td>Van Dale beeldwoordenboek - Nederlands</td>
        <td>985511</td>
        <td>Marloes Geertsen</td>
        <td>16-november 2016</td>
        <td>7-december 2016</td>
        <td><button type="button" class="btn btn-danger     disabled">Te laat</button></td>
      </tr>
      <tr class="">
        <td>3</td>
        <td>122</td>
        <td>9789076174105</td>
        <td>Harry Potter 1 - Harry Potter en de steen der wijzen</td>
        <td>102101</td>
        <td>Maarten Rembrandt</td>
        <td>17-november 2016</td>
        <td>6-januari 2017</td>
        <td><button type="button" class="btn btn-primary     disabled">In omloop</button></td>
      </tr>
      <tr class="">
        <td>4</td>
        <td>123</td>
        <td>9789076174105</td>
        <td>Harry Potter 1 - Harry Potter en de steen der wijzen</td>
        <td>102101</td>
        <td>Maarten Rembrandt</td>
        <td>17-november 2016</td>
        <td>6-januari 2017</td>
        <td><button type="button" class="btn btn-primary     disabled">In omloop</button></td>
      </tr>
      <tr class="">
        <td>5</td>
        <td>124</td>
        <td>9789076174105</td>
        <td>Harry Potter 1 - Harry Potter en de steen der wijzen</td>
        <td>102101</td>
        <td>Maarten Rembrandt</td>
        <td>17-november 2016</td>
        <td>6-januari 2017</td>
        <td><button type="button" class="btn btn-primary     disabled">In omloop</button></td>
      </tr>
  	</tbody>
  </table>
  @endsection
  @include('widgets.panel', array('header'=>true, 'as'=>'atable'))
</div>


@stop
