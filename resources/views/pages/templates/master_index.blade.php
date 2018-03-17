@include('pages.templates.partials._header')
	
	<header class="header-2">
		@include('pages.templates.partials._nav')
		
		@include('pages.templates.partials._banner')
	</header>
	
	@yield('content')
	
	@include('pages.templates.partials._partners-universities')

@include('pages.templates.partials._footer')