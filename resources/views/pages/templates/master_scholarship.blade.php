@include('pages.templates.partials._header')

	<div class="header header_scholarship">
			@include('pages.templates.partials._nav')
	</div>

	@yield('content')
	
	@include('pages.templates.partials._quick-contact')

@include('pages.templates.partials._footer')