@extends('layouts.dashboard')
@section('page_heading','<i class="fa fa-home fa-fw"></i> Startpagina')
@section('section')
								<div class="col-sm-13">
													<div class="row">
															<div class="col-lg-3 col-md-5">
																	<div class="panel panel-primary">
																			<div class="panel-heading">
																					<div class="row">
																							<div class="col-xs-3">
																									<i class="fa fa-book fa-5x"></i>
																							</div>
																								<div class="col-xs-9 text-right">
																									<div class="small">Aantal boeken:</div>
								    															<div class="huge">52</div>
								    															</div>
								  															</div>
																							</div>
																							<a href="#">
								                            <div class="panel-footer">
								                                <span class="pull-left">Details</span>
								                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
								                                <div class="clearfix"></div>
								                            </div>
								                        </a>
								                    </div>
								                </div>
																	<div class="col-lg-3 col-md-5">
																		<div class="panel panel-primary">
																			<div class="panel-heading">
																				<div class="row">
																				 <div class="col-xs-3">
																					<i class="fa fa-book fa-5x"></i>
																					</div>
																		   		<div class="col-xs-9 text-right">
																						<div class="small">Gereserveerde boeken:</div>
																    				<div class="huge">6</div>
																    			</div>
																  			</div>
																		 	</div>
																	 		<a href="#">
																    	<div class="panel-footer">
																			<span class="pull-left">Details</span>
																      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
																      <div class="clearfix"></div>
																      </div>
																      </a>
																    </div>
																  </div>
																		<div class="col-lg-3 col-md-5">
																			<div class="panel panel-primary">
																				<div class="panel-heading">
																					<div class="row">
																						<div class="col-xs-3">
																							<i class="fa fa-book fa-5x"></i>
																							</div>
																							 <div class="col-xs-9 text-right">
																							<div class="small">Gereserveerde boeken:</div>
																							 <div class="huge">6</div>
																							</div>
																						</div>
																					</div>
																						<a href="#">
																							<div class="panel-footer">
																							<span class="pull-left">Details</span>
																							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
																							<div class="clearfix"></div>
																						</div>
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																	 <div class="col-sm-13">
																		<div class="row">
																			<div class="col-lg-3 col-md-5">
																				<div class="panel panel-primary">
																					<div class="panel-heading">
																						<div class="row">
																							<div class="col-xs-3">
																								<i class="fa fa-book fa-5x"></i>
																							</div>
																								<div class="col-xs-9 text-right">
																								<div class="small">Aantal uitgeleverde boeken:</div>
																							  <div class="huge">52</div>
																							</div>
																						</div>
																					</div>
																						<a href="#">
																						  <div class="panel-footer">
																							<span class="pull-left">Details</span>
																						  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
																							<div class="clearfix"></div>
																				  	</div>
																				  </a>
																		  	</div>
																			</div>
																																						<div class="col-lg-3 col-md-5">
																																								<div class="panel panel-primary">
																																										<div class="panel-heading">
																																												<div class="row">
																																														<div class="col-xs-3">
																																																<i class="fa fa-book fa-5x"></i>
																																														</div>
																																															<div class="col-xs-9 text-right">
																																																<div class="small">Aanvragen scholierenaccount:</div>
																															    															<div class="huge">6</div>
																															    															</div>
																															  															</div>
																																														</div>
																																														<a href="#">
																															                            <div class="panel-footer">
																															                                <span class="pull-left">Details</span>
																															                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
																															                                <div class="clearfix"></div>
																															                            </div>
																															                        </a>
																															                    </div>
																															                </div>
																																					<div class="col-lg-3 col-md-5">
																																							<div class="panel panel-primary">
																																									<div class="panel-heading">
																																											<div class="row">
																																													<div class="col-xs-3">
																																															<i class="fa fa-book fa-5x"></i>
																																													</div>
																																														<div class="col-xs-9 text-right">
																																															<div class="small">Geregistreerde scholieren:</div>
																																															<div class="huge">6</div>
																																															</div>
																																														</div>
																																													</div>
																																													<a href="#">
																																												<div class="panel-footer">
																																														<span class="pull-left">Details</span>
																																														<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
																																														<div class="clearfix"></div>
																																												</div>
																																										</a>
																																								</div>
																																						</div>
																																					</div>
																																				</div>




<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-4">
			@section ('cchart1_panel_title','Lijngrafiek')
			@section ('cchart1_panel_body')
			<canvas id="clinet" width="350" height="220"></canvas>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart1'))


		</div>
		<div class="col-sm-4">

			@section ('cchart2_panel_title','Taartgrafiek')
			@section ('cchart2_panel_body')
				<div style="max-width:200px; margin:0 auto;"><canvas class ="round" id="charts" width="250" height="200"></canvas></div>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart2'))


		</div>
	</div>


</div>

@stop
