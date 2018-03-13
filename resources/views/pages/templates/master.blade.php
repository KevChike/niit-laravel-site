@include('pages.templates.partials._header')
	
	{{--  @include('pages.templates.partials._campaign_notification')  --}}

	<div class="header header_2">
			@include('pages.templates.partials._nav')
	</div>

	@yield('content')

	@include('pages.templates.partials._quick-contact')
	
@include('pages.templates.partials._footer')