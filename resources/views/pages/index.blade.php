@extends('pages.templates.master_index')

@section('page_title')
<title>{{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="">
@endsection

@section('keywords')
<meta name="keywords" content="">
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
								<img src="/img/course-img/{{ $course->slug }}.jpg" alt="{{ $course->course_title }}">
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
										<span class="event_day">{{ $event->event_date->format('j') }}</span>
										<span class="event_month">{{ $event->event_date->format('M') }}</span>
										<span class="event_year">{{ $event->event_date->format('Y') }}</span>
									</div>
								</a> 
							</div>
							<div class="card_flex">
								<div class="event_title">
									<a href="events/{{ $event->slug }}">{{ $event->event_title }}</a>
								</div>
								<div class="event_content">
									{!! $event->shortContent !!}
									<a href="events/{{ $event->slug }}">Read more</a>
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

	<section class="alumni_section">
		<div class="tint_layer">
			<div class="container">
				<div class="section_title">
					<h2>Our Alumni</h2>
				</div>
				<div class="alumin_inner">
				    <div id="owl-demo" class="owl-carousel">
						<div class="item-owl">
							<div class="alumni_review">
								<p>
									<img src="/img/left-quotes.png" alt=""> 
									I am freelance Software Developer currently working on KadaOnline (www.facebook.com/kadacoders). I am a certified software Engineer from NIIT Kaduna, I have worked with Brainiac Software company as an intern. I am currently working on a software dictionary (https://github.com/deenkadirr). NIIT is a place for hard work and I am proud to be NIIT graduate.
									<img src="/img/right-quotes.png" alt="">
								</p>
								<div class="alumni_img">
									<img src="/img/alumni-1.jpg" class="img-responsive" alt="Shamsudeen Abdulkadir"/>
								</div>
								<h5>Shamsudeen Abdulkadir</h5>
							</div>
						</div>
						<div class="item-owl">
							<div class="alumni_review">
								<p>
									<img src="/img/left-quotes.png" alt=""> 
									I am a Network Engineer currently working with NIIT Kaduna. I am a certified Network Engineer from NIIT Kaduna. I currently work with NIIT as a Network Engineering Instructor. 
									<img src="/img/right-quotes.png" alt="">
								</p>
								<div class="alumni_img">
									<img src="/img/alumni-2.jpg" class="img-responsive" alt="Chidinmma"/>
								</div>
								<h5>Chidinmma</h5>
							</div>
						</div>
						<div class="item-owl">
							<div class="alumni_review">
								<p>
									<img src="/img/left-quotes.png" alt="">
									When I first came to NIIT, I was only looking forward to learn the basics of using a computer. But fortunately for me, I got a career as a software engineer who can develop Apps and Games for nearly every platform. I never knew Nigerians could develop Apps because I had the mindset that only the whites could make such, but NIIT changed that mindset. I now develop and teach people how to make Apps, thanks to NIIT.
									<img src="/img/right-quotes.png" alt="">
								</p>
								<div class="alumni_img">
									<img src="/img/alumni-3.jpg" class="img-responsive" alt="Abdulbasit Sa'id Ibrahim"/>
								</div>
								<h5>Abdulbasit Sa'id Ibrahim</h5>
							</div>
						</div>
		            </div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('scripts')
<script defer src="/plugins/flexslider/js/jquery.flexslider.js"></script>
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
<script src="/plugins/owl-carousel/js/owl.carousel.js"></script>
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
	$('.scroll_down a').click(function() {
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
