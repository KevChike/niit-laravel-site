	<div class="container">
		<div class="col-md-12 top-bar">
			<div class="left">
				<span class="txt-1">Have A Question?</span>
				<span class="txt-2"><i class="fa fa-phone"></i> {{ config('app.phone1') }}</span>
				<span class="txt-3"><i class="fa fa-envelope-o"></i> {{ config('app.email') }}</span>
			</div>
			<div class="right">
				<ul class="top-socials">
					<li><a href="{{ config('app.facebook') }}"><i class="fa fa-facebook"></i></a></li>
					<li><a href="{{ config('app.instagram') }}"><i class="fa fa-instagram"></i></a></li>
					<li><a href="{{ config('app.medium') }}"><i class="fa fa-medium"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
		
	<nav class="navbar navbar-default">
		<div class="container container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-lg" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-') . config('app.slug') . '.png' }}" alt="" /></a>
				<a class="navbar-brand hidden-lg" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-sm-') . config('app.slug') . '.png' }}" alt="" /></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  	<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="{{ url('/') }}">HOME</a></li>
					<li class="dropdown"><a href="{{ url('courses') }}">COURSES</a></li>
					<li class="dropdown"><a href="{{ url('events') }}">EVENTS</a></li>
					<li class="dropdown"><a href="{{ config('app.medium') }}">BLOG</a></li>
					<li class="dropdown"><a href="{{ url('about') }}">ABOUT</a></li>
					<li class="dropdown"><a href="{{ url('contact') }}">CONTACT</a></li>				
			  </ul>
			</div>
		</div>
	</nav>

	<div class="mobile-menu">
		<div class="container">
		<div class="mobile-logo"><a class="#" href="#"><img src="{{ asset('assets/images/logo-sm-') . config('app.slug') . '.png' }}" alt="" /></a></div>
		<ul id="menu">
			<li><a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('courses') }}">Courses</a></li>
			<li><a href="{{ url('events') }}">Events</a></li>
			<li><a href="{{ config('app.medium') }}">Blog</a></li>
			<li><a href="{{ url('about') }}">About</a></li>
			<li><a href="{{ url('contact') }}">Contact</a></li>
		</ul>
		</div>
	</div>
	