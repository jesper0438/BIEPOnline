@extends('layouts.plane')
@include('layouts.help')
@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('admin') }}"><i class="fa fa-book"></i> BIEPonline Administrator panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                        <li data-toggle="modal" data-target="#help"><a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a></li>
                        <li><a href="{{ url ('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Uitloggen</a></li>


                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li {{ (Request::is('admin') ? 'class=active' : '') }}>
                            <a href="{{ url ('admin') }}"><i class="fa fa-home fa-fw"></i> Startpagina</a>
                        </li>
                        <li {{ (Request::is('bookadd') ? 'class=active' : '') }}>
                            <a href="{{ url ('bookadd') }}"><i class="fa fa-book fa-fw"></i> Boeken toevoegen</a>
                        </li>
                        <li {{ (Request::is('registerbooks') ? 'class=active' : '') }}>
                            <a href="{{ url ('registerbooks') }}"><i class="fa fa-th-list fa-fw"></i> Alle geregistreerde boeken</a>
                        </li>
                        <li {{ (Request::is('allstudents') ? 'class=active' : '') }}>
                            <a href="{{ url ('allstudents') }}"><i class="fa fa-mortar-board fa-fw"></i> Alle geregistreerde scholieren</a>
                        </li>
                        <li {{ (Request::is('approvestudents') ? 'class=active' : '') }}>
                            <a href="{{ url ('approvestudents') }}"><i class="fa fa-check-square-o fa-fw"></i> Aanvraag scholieren registratie</a>
                        </li>
                        <li {{ (Request::is('returnbooks') ? 'class=active' : '') }}>
                            <a href="{{ url ('returnbooks') }}"><i class="fa fa-exchange fa-fw"></i> Uitgifte en retour boeken</a>
                        </li>
                        <li {{ (Request::is('issuedbooks') ? 'class=active' : '') }}>
                            <a href="{{ url ('issuedbooks') }}"><i class="fa fa-random fa-fw"></i> Boeken nu in omloop</a>
                        </li>
                            </ul>
                            <br></br>
                      <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ url ('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Uitloggen</a>
                        </li>
                      </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop
