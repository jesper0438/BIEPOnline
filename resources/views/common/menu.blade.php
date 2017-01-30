{{-- Each menu item is a <li> with an <a> inside --}}

@if (Auth::guest())
<li>
  <a href="{{ url('/login') }}">
    <i class="fa fa-university fa-2x fa-fw" aria-hidden="true"></i>&nbspAdministrator / Bibliothecaris login
  </a>
</li>


	<li>
		<a href="{{ url('/register') }}">
			<i class="fa fa-user-plus fa-2x fa-fw"></i>&nbspRegistreer
		</a>
	</li>

  <li>
    <a href="{{ url('student') }}">
      <i class="fa fa-graduation-cap fa-2x fa-fw"></i>&nbspScholieren
    </a>
  </li>


@else
<li>
	<a class="nav-container" href="{!! url('user') !!}">
		<i class="fa fa-users fa-2x fa-fw"></i>&nbspGebruikers
	</a>
</li>
<li>
	<a class="nav-container" href="{!! url('role') !!}">
		<i class="fa fa-map fa-2x fa-fw"></i>&nbspRollen
	</a>
</li>
<li>
	<a class="nav-container" href="{!! url('loan') !!}">
		<i class="fa fa-arrow-circle-right fa-2x fa-fw"></i>&nbspUitlenen
	</a>
</li>
<li>
	<a class="nav-container" href="{!! url('category') !!}">
		<i class="fa fa-university fa-2x fa-fw"></i>&nbspCategorie&euml;n
	</a>
</li>
<li>
	<a class="nav-container" href="{!! url('author') !!}">
		<i class="fa fa-paint-brush fa-2x fa-fw"></i>&nbspAuteurs
	</a>
</li>
<li>
	<a class="nav-container" href="{!! url('book') !!}">
		<i class="fa fa-book fa-2x fa-fw"></i>&nbspBoeken
	</a>
</li>
<li>
	<a class="nav-container" href="{!! url('copy') !!}">
		<i class="fa fa-tags fa-2x fa-fw"></i>&nbspExemplaren
	</a>
</li>
<li>
	<a class="nav-container" href="{!! url('location') !!}">
		<i class="fa fa-map-pin  fa-2x fa-fw"></i>&nbspLocaties
	</a>
</li>
<li>
	<a class="nav-container" href="{!! url('/logout') !!}">
		<i class="fa fa-sign-out  fa-2x fa-fw"></i>&nbspLog-out
	</a>
</li>
@endif
