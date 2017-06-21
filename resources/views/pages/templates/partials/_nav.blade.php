
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#burger" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="{{ url('/') }}"><img src="/img/logo-{{ config('app.slug') }}.png"></a>
					</div>
					<div class="collapse navbar-collapse" id="burger">
						<ul class="nav navbar-nav navbar-left">
							<li><a href="{{ url('/courses') }}" class="btn hover_effect">Courses</a></li>   
							<li><a href="{{ url('/events') }}" class="btn hover_effect">Events</a></li>
							<li><a href="https://www.medium.com/niit-abuja" class="btn hover_effect">Blog</a></li>
							<li><a href="{{ url('/about') }}" class="btn hover_effect">About</a></li>
							<li><a href="{{ url('/contact') }}" class="btn hover_effect">Contact</a></li>
						</ul> 
						{{-- <div class="social_icon">
							<a href="{{ config('app.facebook') }}" target="_blank" class="social_button_facebook"><i class="fa fa-facebook"></i></a> 
							<a href="{{ config('app.twitter') }}" target="_blank" class="social_button_twitter"><i class="fa fa-twitter"></i></a> 
							<a href="{{ config('app.medium') }}" target="_blank" class="social_button_medium"><i class="fa fa-medium"></i></a>  
						</div> --}} 
						<div class="social_icon" style="margin:0;">
							<a href="{{ url('/scholarship') }}" class="campaign">2017 Scholarship</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</nav>