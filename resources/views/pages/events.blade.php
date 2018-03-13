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

@section('content')

	<section class="upcoming_event_section" style="padding-top: 6em;">
		<div class="container">
			<h2>Upcoming Events</h2>
			<ul class="card_wrapper">
				@forelse( $events as $event )
					<li class="event_card">
						<div class="event_card_inner">
							<div class="event_card_inner_left">
								<a href="{{ url('/events/' . $event->slug) }}">
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
									<a href="{{ url('/events/' . $event->slug) }}">{{ $event->event_title }}</a>
								</div>
								<div class="event_content">
									<p>
										{!! $event->shortContent !!}
										<a href="{{ url('/events/' . $event->slug) }}">Read more</a>
									</p>
								</div>
								<div class="more_event_detail">
									<a href="{{ url('/events/' . $event->slug) }}">View details <i class="icon-arrow-right "></i></a>
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

			<div class="see_more_section">
				
			</div>
		</div>
	</section>

@endsection
