<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>BIEPOnline</title>
	<link rel="shortcut icon" href="{{ asset('favicon.png') }}">
	<link href="/css/app.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body style="padding-top: 70px;">
<div class="container-fluid">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span><i class="fa fa-bars"></i></span>
				</button>
				<a class="navbar-brand logo" href="{{ url('/home') }}"><img id="header-logo" src="img/Logo.png"></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/login') }}">Login</a></li>
						<li><a href="{{ url('/register') }}">Registreer</a></li>
					@else
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="{{ url('/help') }}">
										Help
									</a>
								</li>
								<li>
									<a href="{{ url('/logout') }}">
										Log uit
									</a>
								</li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	<!-- include the content -->
	<div class="row">
		<div class="col-sm-3 col-md-2 ">
			<div class="nav">
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
<script src="/js/app.js"></script>
<!-- include additional scripts -->
@yield('scripts')
</body>
</html>