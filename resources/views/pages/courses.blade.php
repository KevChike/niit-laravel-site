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
@endsection

@section('banner_title')
<h3>All Courses</h3> <span class="location pull-right">You Are Here :  <a href="{{ url('/') }}">Home</a>  >  <span class="r-page">Courses</span></span>
@endsection

@section('content')

	<div class="courses-main">
		<div class="container">

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
				
				<div class="col-md-12 pagi">
					{{ $courses->links() }}
				</div>

			</div>
			
		</div>
	</div>

	@include('pages.templates.partials._partners-universities')

@endsection
