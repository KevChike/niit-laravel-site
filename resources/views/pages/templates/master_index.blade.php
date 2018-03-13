@include('pages.templates.partials._header')
	
	{{--  @include('pages.templates.partials._campaign_notification')  --}}
	
	@include('pages.templates.partials._banner')


	@yield('content')
	
	@include('pages.templates.partials._quick-contact')

@include('pages.templates.partials._footer')