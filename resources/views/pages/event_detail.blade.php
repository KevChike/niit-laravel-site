@extends('pages.templates.master')

@section('page_title')
<title>{{ $event->event_description }} &#8211; {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="{{ $event->event_description }}">
@endsection

@section('keywords')
<meta name="keywords" content="">
@endsection

@section('content')

	<section class="event_detail_section">
		<div class="container event_description">
			<div class="back_btn">
				<a href="{{ url('/events') }}"><i class="fa fa-long-arrow-left"></i> Back to Events</a>
			</div>
			<h2>{{ $event->event_title }}</h2>
			<p class="event_detail_date">Event date: {{ $event->event_date->format('l, jS F, Y') }}</p>
			<p>
				{!! $event->event_description !!}
			</p>
		</div>

		{{-- <div class="container" style="padding-top: 0em; border-top: 1px solid #dedede;">
			<div class="event_footer">
	            <span>
					<a class="prev_event" title="" href="javascript:;">
						<i class="fa fa-chevron-left"></i>
	                    <div>
	                        <b>Previous</b>
	                        <div class="event_footer_title">
	                            Previous event                     
							</div>
	                    </div>
	                </a>
				</span>
	            
	            <span>
					<a class="next_event" title="" href="javascript:;">
	                    <div>
	                        <b>Next</b>
	                        <div class="event_footer_title">
	                            Next event
							</div>
	                    </div>
	                    <i class="fa fa-chevron-right"></i>
	                </a>
				</span>
	        </div>
	    </div> --}}
	</section>

@endsection
