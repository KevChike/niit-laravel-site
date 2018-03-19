@extends('pages.templates.master')

@section('page_title')
<title>Courses &#8211; {{ config('app.name') }}</title>
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
<h3>All Courses</h3> <span class="location pull-right">You Are Here :  <a href="{{ url('/') }}">Home</a>  >  <span class="r-page">Courses</span></span>
@endsection

@section('content')

	<div class="courses-main">
		<div class="container">

			<div class="courses">

				<div class="col-md-12 cc-2">
					<div class="box">
						<form class="form-inline">
							<div class="form-group">
								<a href="{{ url('courses/s/mms-software-engineering') }}"><img src="{{ asset('assets/images/course-img/thumbnails/certificate-in-network-support-and-maintenance.jpg') }}" alt="" /></a>
							</div>
							
							<div class="form-group">
								<div class="g-box">
									<div class="info">
										<a href="{{ url('courses/s/mms-software-engineering') }}"><h3>MMS - SOFTWARE ENGINEERING</h3></a>
										<div class="stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<br>
											<span class="learners"> Master Mind Series </span>
										</div>
										<div class="date">
											<i class="fa fa-clock-o"></i> 2 years
										</div>
									</div>
								</div>
							</div>
							
							<div class="para form-group">
								<p>The Master Mind Series - Software Engineering program builds a strong found in ICT, software engineering principles, enterprise development frameworks, project management and much more. This course focuses on developing skills in .NET and J2EE Technologies.</p>
								<a href="{{ url('courses/s/mms-software-engineering') }}" class="m-btn">Learn More</a>
							</div>
							
						</form>
					</div>
				</div>

				<div class="col-md-12 cc-2">
					<div class="box">
						<form class="form-inline">
							<div class="form-group">
								<a href="{{ url('courses/i/mms-infrastructure-management') }}"><img src="{{ asset('assets/images/course-img/thumbnails/certificate-in-network-support-and-maintenance.jpg') }}" alt="" /></a>
							</div>
							
							<div class="form-group">
								<div class="g-box">
									<div class="info">
										<a href="{{ url('courses/i/mms-infrastructure-management') }}"><h3>MMS - INFRASTRUCTURE MANAGEMENT</h3></a>
										<div class="stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<br>
											<span class="learners"> Master Mind Series </span>
										</div>
										<div class="date">
											<i class="fa fa-clock-o"></i> 2 years
										</div>
									</div>
								</div>
							</div>
							
							<div class="para form-group">
								<p>The Master Mind Series - Infrastructure Management program builds a strong networking fundamnetals, enterprise network solutions management concepts and security solutions management and much more. NIIT provides an opprtunity to pursue specialization in Linux or Microsoft platform.</p>
								<a href="{{ url('courses/i/mms-infrastructure-management') }}" class="m-btn">Learn More</a>
							</div>
							
						</form>
					</div>
				</div>

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
				
				<div class="col-md-12 pagi">
					{{ $courses->links() }}
				</div>

			</div>
			
		</div>
	</div>

	@include('pages.templates.partials._partners-universities')

@endsection
