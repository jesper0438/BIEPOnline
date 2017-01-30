<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>BIEPOnline</title>
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<style>
	.top-right {
		position: absolute;
		right: 10px;
		top: 10px;
		color: white;
	}
	</style>
</head>

<body onload="updateClock(); setInterval('updateClock()', 1000 )" style="padding-top: 70px;">
<div class="container-fluid">
	<nav class="navbar navbar-inverse  navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand logo" href="{{ url('/') }}"><i class="fa fa-book"></i>&nbspBIEPOnline</a>
				<div class="top-right"><span id="clock">&nbsp;</span> <?php
				echo date('d/m/Y', time()); ?>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					@yield('ul-navbar-left')
				</ul>
				<ul class="nav navbar-nav navbar-right">
					@yield('ul-navbar-right')
				</ul>
			</div>
		</div>
	</nav>
	<!-- include the content -->
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<div class="nav nav-sidebar">
				<ul class="nav nav-pills nav-stacked">
					@include('common.menu')
				</ul>
			</div>
		</div>
		<div class="col-sm-8 col-md-9 main">
			@if (array_key_exists('title', View::getSections()))
				<div class="page-header"><h1>@yield('title', 'title section here')</h1></div>
			@endif
			{{-- error section --}}
			@include('common.errors')
			@include('common.success')

			@yield('content')

		</div>
	</div>
</div>
@yield('modals')
<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
function updateClock ( )
{
  var currentTime = new Date ( );

  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " ;

  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}
</script>
<!-- include additional scripts -->
@yield('scripts')
</body>
</html>
