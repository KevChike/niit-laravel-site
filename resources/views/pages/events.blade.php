@extends('pages.templates.master')

@section('page_title')
<title>Events &#8211; {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="">
@endsection

@section('keywords')
<meta name="keywords" content="">
@endsection

@section('style')
	{{-- Owl stylesheet --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
     
    {{-- Default Theme --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">

    {{-- bxSlider CSS file --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.bxslider.css') }}"  />
@endsection

@section('banner_title')
<h3>Events</h3> <span class="location pull-right">You Are Here :  <a href="{{ url('/') }}">Home</a>  >  <span class="r-page">Events</span></span>
@endsection

@section('content')

	<div class="events">
		<div class="container">
			<div class="col-md-12">
				@forelse( $events as $event )
					<div class="event">
						<div class="media">
						  	<div class="media-body">
								<a href="{{ url('events/' . $event->slug) }}"><h4 class="media-heading">{{ $event->event_title }}</h4></a>
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
				{{ $events->links() }}
			</div>
		</div>
	</div>

	@include('pages.templates.partials._partners-universities')
	
@endsection
