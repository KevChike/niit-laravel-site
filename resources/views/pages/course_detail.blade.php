@extends('pages.templates.master')

@section('page_title')
<title>{{ $course->course_title }} &#8211; {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="{{ $course->course_details }}">
@endsection

@section('keywords')
<meta name="keywords" content="{{ $course->course_title }}">
@endsection

@section('banner_title')
<h3>Course Details</h3> <span class="location pull-right">You Are Here :  <a href="{{ url('/') }}">Home</a>  >  <a href="{{ url('courses') }}">Courses</a>  >  <span class="r-page">Course Details</span></span>
@endsection

@section('content')
	
	<div class="course-single">
		<div class="container">
			<div class="col-md-12">
				<h1>{{ strtoupper($course->course_title) }}</h1>
			</div>	
			<div class="about-course">
				<div class="col-md-6">
					<div class="box">
						<form class="form-inline">
							<div class="form-group">
								<img src="{{ asset('assets/images/course-img/thumbnails') . '/' . $course->slug . '.jpg' }}" alt="" />
							</div>
							<div class="form-group">
								<div class="g-box">
									<div class="info">
										<h3>Duration: {{ $course->duration }}</h3>
										<div class="stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="date">
											{{ $course->category }}
										</div>
									</div>
								</div>
							</div>	
						</form>
					</div>
					<div class="about-author">
						@if($course->job_opportunities != '')
							<div class="a-name">JOB OPPORTUNITIES:</div>
							<div> {!! $course->job_opportunities !!} </div>
						@else
							<div class="a-name">LEARN THE RIGHT WAY</div>
						@endif
						<div class="a-position"></div>
						<a href="#" class="c-btn">TAKE THIS COURSE</a>
					</div>	
				</div>
				
				<div class="col-md-6 right">
				  <ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#t1" aria-controls="t1" role="tab" data-toggle="tab">Course Description</a></li>
				  </ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="t1">
							{!! $course->course_details !!}
							<div class="lessons">
								@if($course->course_content != '')
									<h2>Course Content</h2>
									<ul class="lessons-1">
										{!! $course->course_content !!}
									</ul>
								@endif
							</div>
							@if($course->certification_title != '')
								<div class="entry_profile">
									<h2>Cetificate Title</h2>
									<ul>
										{!! $course->certification_title !!}
									</ul>
								</div>
							@endif

							@if($course->entry_profile != '')
								<div class="entry_profile">
									<h2>Entry Profile</h2>
									{!! $course->entry_profile !!}
								</div>
							@endif

							@if($course->exit_profile != '')
								<div class="entry_profile">
									<h2>What You Will Learn</h2>
									{!! $course->exit_profile !!}
								</div>
							@endif

							@if($course->certification_mapping != '')
								<div class="entry_profile">
									<h2>Certification Mapping</h2>
									{!! $course->certification_mapping !!}
								</div>
							@endif
						</div>						
					</div>
				</div>
			</div>
			
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
