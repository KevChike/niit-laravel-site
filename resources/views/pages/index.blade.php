@extends('pages.templates.master_index')

@section('page_title')
	<title>{{ config('app.name') }}</title>
@endsection

@section('page_description')
	<meta name="description" content="NIIT is a blobal leader in skills and talent development and has established presence in Nigeria. {{ config('app.name') }} offers various programs like MMS (Software Engineering and Infrastructure Management), Oracle 12c, Server Infrastructure, CCNA, A+, N+, S+, web design and development, Graphic design, MIS and many more.">
@endsection

@section('keywords')
	<meta name="keywords" content="">
@endsection

@section('style')
	{{-- Owl stylesheet --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
     
    {{-- Default Theme --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">

	{{-- RS5.0 Main Stylesheet --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
     
    {{-- RS5.0 Layers and Navigation Styles --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">
    
    {{-- bxSlider CSS file --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.bxslider.css') }}"  />
@endsection

@section('content')
	@include('pages.templates.partials._fact-bar')

	<div class="courses-1">
		<div class="container">
			<div class="col-md-12 welcome">
				<h2>COURSES WE PROVIDE</h2>
				<p>Check out our awesome courses</p>
			</div>
			<div class="courses">
				@forelse( $courses as $course )
					<div class="cc card_flex_display">
						<div class="box">
							<a href="{{ url('courses') . '/' . $course->slug }}">
								<div class="ovrly">
									<img src="{{ asset('assets/images/course-img') . '/' . $course->slug . '.jpg' }}" class="c-pic img-responsive" alt="" />
									<div class="after"></div>
								</div>
							</a>
							<div class="info">
								<a href="{{ url('courses') . '/' . $course->slug }}"><h3 style="text-transform: uppercase;">{{ $course->course_title }}</h3></a>
								<div class="stars">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i> <br>
									<span class="learners"> {{ $course->category }} </span>
								</div>
								<div class="date">
									<i class="fa fa-clock-o"></i> {{ $course->duration }}
								</div>
							</div>
						</div>
					</div>
				@empty
					<div class="welcome">
	                    <h2>No course avaliable</h2>
	                </div>
				@endforelse
				
				<div class="col-md-12 pagi" style="margin: 30px 0;">
					<a href="{{ url('courses') }}" class="btn-n btn-ex">VIEW ALL</a>
				</div>
			</div>
		</div>
	</div>

	<div class="services-1">
		<div class="container">
			<div class="col-md-3 col-sm-6">
				<img src="{{ asset('assets/images/icons/1.png') }}" alt="" />
				<h3>CLASSROOM LEARNING</h3>
				<p>Access to certified instructors and high quality course content by industry experts</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<img src="{{ asset('assets/images/icons/2.png') }}" alt="" />
				<h3>EARN CERTIFICATE</h3>
				<p>NIIT certification is recognized in over 40 countries. Earn a certification from us today.</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<img src="{{ asset('assets/images/icons/3.png') }}" alt="" />
				<h3>FLEXIBLE SCHEDULE</h3>
				<p>Start any course at your own time and pace.</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<img src="{{ asset('assets/images/icons/4.png') }}" alt="" />
				<h3>24/7 SUPPORT</h3>
				<p>Well trained customer support agents are avaliable 24/7 to give you necessary guidance.</p>
			</div>
		</div>
	</div>

	<div class="events" style="background-color: #6B7480;padding-top: 20px;">
		<div class="col-md-12 welcome">
			<h2 style="color: #fff;">UPCOMING EVENTS</h2>
			<p style="color:#fff">You don't want to miss out</p>
		</div>
		<div class="container">
			<div class="col-md-12">
				@forelse( $events as $event )
					<div class="event">
						<div class="media">
						  	<div class="media-body">
								<h4 class="media-heading">{{ $event->event_title }}</h4>
								<div class="e-tags">
									<span class="day-tag">{{ $event->event_start_date->format('l, jS F, Y') }}</span>
									@if($event->event_time != '')
										<span class="time-tag">
											{{ $event->event_time }}
										</span>
									@endif
								</div>
								<p> {!! $event->shortContent !!} </p>
								<a href="{{ url('events/' . $event->slug) }}" class="r-more">Read More  >></a>
						  	</div>
						</div>
					</div>
				@empty
					<div class="welcome">
	                    <h2>No event avaliable</h2>
	                </div>
				@endforelse
			</div>
			<div class="col-md-12 pagi">
				<a href="{{ url('events') }}" class="btn-n btn-ex">VIEW ALL</a>
			</div>
		</div>
	</div>

	@include('pages.templates.partials._alumni')

@endsection

{{-- @section('scripts')
<script defer src="/assets/plugins/flexslider/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
</script>
<script src="/assets/plugins/owl-carousel/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
	});
</script>
<script type="text/javascript">
	$('.scroll_down').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 1000);
	            return false;
	        }
	    }
	});
</script>

@endsection --}}
