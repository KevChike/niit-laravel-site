@include('pages.templates.partials._header')
	
	<header class="header-4 header-2">
		@include('pages.templates.partials._nav')
		
		<div class="container main-text">
			<div class="col-md-12">
				@yield('banner_title')
			</div>
		</div>
	</header>
	
	@yield('content')
	
@include('pages.templates.partials._footer')