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
<link rel="stylesheet" href="/assets/plugins/flexslider/css/flexslider.css" type="text/css" media="all" property="" />
<link href="/assets/plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet">
@endsection

@section('content')
	<section class="course_section" id="section_1">
		<div class="container">
			<div class="section_title">
				<h2>Our Courses</h2>
			</div>
			<ul class="card_group">
				@forelse( $courses as $course )
					<li class="card">
						<a class="card_flex_display" href="/courses/{{ $course->slug }}">
							<span class="card_img">
								<img src="/assets/img/course-img/{{ $course->photo }}" alt="{{ $course->course_title }}">
							</span>
							<span class="card_details card_flex_display card_flex">
								<span class="card_title">
									{{ $course->course_title }}
								</span>
								<span class="card_subtitle card_flex">
									{{ $course->category }}
								</span>
								<span class="card_footer">
									<i class="fa fa-clock-o footer_icon"></i><span class="duration card_flex"> {{ $course->duration }} </span>
								</span>
							</span>
						</a>
					</li>
				@empty
					<div class="note note-info">
	                    <h4 class="">No course avaliable</h4>
	                </div>
				@endforelse
			</ul>
			@if( count( $courses ) > 0 )
				<div class="see_more_section">
					<a href="{{ url('/courses') }}" class="see_all">See All</a>
				</div>
			@endif
		</div>
	</section>

	<section class="upcoming_event_section" style="padding-top: 1.5em;">
		<div class="container">
			<h2>Upcoming Events</h2>
			<ul class="card_wrapper">
				@forelse( $events as $event )
					<li class="event_card">
						<div class="event_card_inner">
							<div class="event_card_inner_left">
								<a href="events/{{ $event->slug }}">
									<div class="event_date">
										<span class="calendar_top">
											<i class="fa fa-circle pull-left"></i>
											&nbsp;
											<i class="fa fa-circle pull-right"></i>
										</span>
										<span class="event_day">{{ $event->event_start_date->format('j') }}</span>
										<span class="event_month">{{ $event->event_start_date->format('M') }}</span>
										<span class="event_year">{{ $event->event_start_date->format('Y') }}</span>
									</div>
								</a> 
							</div>
							<div class="card_flex">
								<div class="event_title">
									<a href="events/{{ $event->slug }}">{{ $event->event_title }}</a>
								</div>
								<div class="event_content">
									<p>
										{!! strip_tags($event->shortContent) !!}
										<a href="{{ url('/events/' . $event->slug) }}">Read more</a>
									</p>
								</div>
								<div class="more_event_detail">
									<a href="events/{{ $event->slug }}">View details <i class="icon-arrow-right "></i></a>
								</div>
							</div>
						</div>
					</li>
				@empty
					<div class="note note-info">
	                    <h4 class="">No event avaliable</h4>
	                </div>
				@endforelse
			</ul>
		</div>
	</section>

	@include('pages.templates.partials._alumni')

@endsection

@section('scripts')
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

@endsection
