@extends('layouts.dashboard')
@include('layouts.loader')
@section('page_heading','<i class="fa fa-exchange fa-fw"></i> Uitgifte en retour boeken')
@section('section')
<div class="alert alert-success  alert-dismissable " role="alert" hidden="hidden">
 <button type="button" class="close alert-close" aria-label="Close"><span aria-hidden="true">×</span></button>  <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Actie is succesvol uitgevoerd.  <button type="button" class="btn btn-warning btn-outline ">Maak de laatste wijziging ongedaan <i class="fa fa-undo"></i></button>
</div>
<div class="col-sm-12">
 <div class="row">
  <div class="col-sm-6">
  @section ('panel1_panel_title', 'Geef een nieuw boek uit (uitgifte)')
  @section ('panel1_panel_body')
  <form class="form-horizontal">
    <div class="form-group">
      <label class="col-sm-2 control-label">Scholier ID</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" data-form-field="" placeholder="Vul hier een scholier ID in">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Boek ID</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" placeholder="Vul hier een boek ID in">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" data-toggle="modal" data-target="#bookOut" class="btn btn-primary btn-lg btn-block">Geef boek uit <i class="fa fa-book"></i> <i class="fa fa-long-arrow-right"></i></button>
      </div>
    </div>
  </form>
  @endsection
  @include('widgets.panel', array('header'=>true, 'as'=>'panel1'))
</div>
<div class="col-sm-6">
  @section ('panel2_panel_title', 'Inname boek (retour)')
  @section ('panel2_panel_body')
  <form class="form-horizontal">
    <div class="form-group">
      <label class="col-sm-2 control-label">Boek ID</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" placeholder="Vul hier een boek ID in">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" data-toggle="modal" data-target="#bookIn" class="btn btn-primary btn-lg btn-block">Neem boek in <i class="fa fa-book"></i> <i class="fa fa-long-arrow-left"></i></button>
      </div>
    </div>
  </form>
  @endsection
  @include('widgets.panel', array('header'=>true, 'as'=>'panel2'))
</div>
</div>
<div class="row">
  <div class="col-sm-6">
    @section ('panel3_panel_title', '<i class="fa fa-search"></i> Zoek scholier ID ')
    @section ('panel3_panel_body')
    <form class="form-horizontal">
      <label>Zoek op voornaam en geboortedatum:</label><br></br>
      <div class="form-group">
        <label class="col-sm-2 control-label">Voornaam</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Vul hier een voornaam in">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Geboortedatum</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" placeholder="Vul hier een geboortedatum in (00-00-0000)">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default "><i class="fa fa-search"></i> Zoek op voornaam en geboortedatum</i></button>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Scholier ID</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" placeholder="" readonly>
        </div>
      </div>
    </form>
    @endsection
    @include('widgets.panel', array('header'=>true, 'as'=>'panel3'))
  </div>
  <div class="col-sm-6">
    @section ('panel4_panel_title', '<i class="fa fa-search"></i> Zoek Boek ID ')
    @section ('panel4_panel_body')
    <form data-toggle="validator" role="form" class="form-horizontal">
      <label>Zoek via ISBN nummer:</label><br></br>
      <div class="form-group has-feedback">
        <label for="ISBN" class="col-sm-2 control-label">ISBN</label>
        <div class="col-sm-10">
              <input placeholder="Vul hier een ISBN nummer in" type="number" pattern="\d+" onKeyDown="if(this.value.length==15) this.value = this.value.slice(0, - 1);" data-minlength="7" maxlength="15" class="form-control"></input>
              <div class="help-block with-errors" id="ISBN">* ISBN nummer moet minimaal 7 tekens bevatten en heeft maximaal 15 tekens.</div>
        </div>
          <div class="col-sm-offset-2 col-sm-10">
            <button class="btn btn-default" type="submit" data-validate="true"><i class="fa fa-search"></i> Zoek op ISBN nummer</button>
          </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Boek ID <br> (in omloop)</label>
        <div class="col-sm-9">
          <div class="input-group">
              <select multiple="" class="form-control" readonly>
                  <option>Book ID: 123 Toegewezen aan: Ton Karelse</option>
                </select>
              <div class="help-block">*Let op, er kunnen meerdere boek ID's verschijnen per ISBN nummer. </div>
          </div>
        </div>
      </div>
    </form>
  </div>
    @endsection
    @include('widgets.panel', array('header'=>true, 'as'=>'panel4'))
  </div>
</div>
</div>

@stop
