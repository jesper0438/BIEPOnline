@if (Auth::check())

<li>
	<a id="side-nav" href="{!! url('book') !!}">
		<i class="fa fa-book fa-2x fa-fw"></i>&nbspBoeken
	</a>
</li>
<li>
	<a id="side-nav" href="{!! url('category') !!}">
		<i class="fa fa-university fa-2x fa-fw"></i>&nbspCategorieën
	</a>
</li>
<li>
	<a id="side-nav" href="{!! url('copy') !!}">
		<i class="fa fa-tags fa-2x fa-fw"></i>&nbspExemplaren
	</a>
</li>
<li>
	<a id="side-nav" href="{!! url('user') !!}">
		<i class="fa fa-users fa-2x fa-fw"></i>&nbspGebruikers
	</a>
</li>
<li>
	<a id="side-nav" href="{!! url('location') !!}">
		<i class="fa fa-map-pin fa-2x fa-fw"></i>&nbspLocaties
	</a>
</li>
<li>
	<a id="side-nav" href="{!! url('role') !!}">
		<i class="fa fa-map fa-2x fa-fw"></i>&nbspRollen
	</a>
</li>
<li>
	<a id="side-nav" href="{!! url('loan') !!}">
		<i class="fa fa-arrow-circle-right fa-2x fa-fw"></i>&nbspUitlenen
	</a>
</li>

@else

@endif
