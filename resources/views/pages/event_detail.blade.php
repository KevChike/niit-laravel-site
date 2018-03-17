@extends('pages.templates.master')

@section('page_title')
<title>{{ $event->event_title }} &#8211; {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="{{ $event->event_description }}">
@endsection

@section('keywords')
<meta name="keywords" content="">
@endsection

@section('banner_title')
<h3>Event Details</h3> <span class="location pull-right">You Are Here :  <a href="{{ url('/') }}">Home</a>  > <a href="{{ url('events') }}">Events</a>  >  <span class="r-page">Event Details</span></span>
@endsection

@section('content')

    <div class="blog-1 blog-single">
		<div class="container">
			<div class="blog blog-main">
				<div class="col-md-8 col-md-offset-2">
					<div class="item">
						<h2>{{ $event->event_title }}</h2>
						<div class="post-info">
							<span class="category"><strong>Event date:</strong> {{ $event->event_start_date->format('l, jS F, Y') }}</span>
							@if($event->event_time != '')
								<span class="date"><strong>Event date:</strong> {{ $event->event_time }}</span>
							@endif
						</div>
						{!! $event->event_description !!}
					</div>
				</div>		
			</div>
		</div>
	</div>

	<div class="course-single" style="padding-top: 30px;">
		<div class="container">
			<div class="col-md-12">
				<h2 class="heading-2">You May Like</h2>
			</div>
			<div class="courses">
				@forelse( $related_courses as $related_course )
					<div class="cc card_flex_display">
						<div class="box">
							<a href="{{ url('courses') . '/' . $related_course->slug }} ">
								<div class="ovrly">
									<img src="{{ asset('assets/images/course-img') . '/' . $related_course->slug . '.jpg' }}" class="c-pic img-responsive" alt="" />
									<div class="after"></div>
								</div>
							</a>
							<div class="info">
								<a href="{{ url('courses') . '/' . $related_course->slug }} "><h3 style="text-transform: uppercase;">{{ $related_course->course_title }}</h3></a>
								<div class="stars">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i> <br>
									<span class="learners"> {{ $related_course->category }} </span>
								</div>
								<div class="date">
									<i class="fa fa-clock-o"></i> {{ $related_course->duration }}
								</div>
							</div>
						</div>
					</div>
				@empty
					<div class="welcome">
	                    <h2>No course avaliable</h2>
	                </div>
				@endforelse
			</div>
		</div>
	</div>

	@include('pages.templates.partials._partners-universities')

@endsection
