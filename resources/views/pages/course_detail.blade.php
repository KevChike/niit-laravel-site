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

@section('content')
	<section class="breadcrumb_section">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i> Home</a> <i class="fa fa-circle"></i></li>
				<li class="breadcrumb-item"><a href="{{ url('/courses') }}">Courses</a> <i class="fa fa-circle"></i></li>
				<li class="breadcrumb-item active">{{ $course->course_title }}</li>
			</ol>
			<div class="back_btn">
				<a href="{{ url('/courses') }}"><i class="fa fa-long-arrow-left"></i> Back to Courses</a>
			</div>
		</div>
	</section>
	<section class="course_banner">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 left_content">
					<h1>{{ $course->course_title }}</h1>
					<p>
						<span>{{ $course->category }}</span> |
						<span>Duration: {{ $course->duration }}</span>
					</p>
				</div>
				<div class="col-md-4 col-sm-4 right_content">
					<div class="right_content_inner">
						<div>
							<img src="/assets/img/course-img/{{ $course->photo }}" class="img-responsive" alt="{{ $course->course_title }}">
						</div>
						<div class="course_feature">
							<h4>Incentives</h4>
							<ul>
								<li><i class=" icon-badge feature_icon"></i> <span>Verified NIIT certification</span></li>
								<li><i class="icon-pencil feature_icon"></i> <span>Collaborative learning</span></li>
								<li><i class="icon-user feature_icon"></i> <span>Expert instructors</span></li>
								<li><i class="icon-pie-chart feature_icon"></i> <span>Projects</span></li>
							</ul>
							<div class="course_feature_bottom">
								<h3>Are you interested?</h3>
								<a href="{{ url('/contact') }}">Yes, I am!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="course_feature_xs">
		<div class="container incentives">
			<div class="panel-group" id="myAccord">
				<div class="panel">
	                <div class="panel-heading">
	                    <h4 class="panel-title">
	                        <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#myAccord" href="#collapse_incentives">&nbsp;Incentives</a>
	                    </h4>
	                </div>
	                <div id="collapse_incentives" class="panel-collapse collapse in">
	                    <div class="panel-body">
	                        <ul>
								<li><i class=" icon-badge feature_icon"></i> <span>Verified NIIT certification</span></li>
								<li><i class="icon-pie-chart feature_icon"></i> <span>Projects</span></li>
								<li><i class="icon-pencil feature_icon"></i> <span>Collaborative learning</span></li>
								<li><i class="icon-user feature_icon"></i> <span>Expert instructors</span></li>
							</ul>
							<div class="course_feature_xs_bottom">
								<h3>Are you interested?</h3>
								<a href="javascript:;">Yes, I am!</a>
							</div>
	                    </div>
	                </div>
	            </div>	
	        </div>
		</div>
	</section>
	<section class="detail_section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<div class="course_content">
						<h3>Course Description</h3>
						<p> 
							{!! $course->course_details !!}
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('scripts')	
	<script type="text/javascript">
	    var $activePanelHeading = $('.panel-group .panel .panel-collapse.in').prev().addClass('active');  
	    $activePanelHeading.find('a').prepend('<span class="fa fa-minus"></span> ');
	    $('.panel-group .panel-heading').not($activePanelHeading).find('a').prepend('<span class="fa fa-plus"></span> ');
	    $('.panel-group').on('show.bs.collapse', function (e) {  
	        $(e.target).prev().addClass('active').find('.fa').toggleClass('fa-plus fa-minus');
	    });
	    $('.panel-group').on('hide.bs.collapse', function (e) { 
	        $(e.target).prev().removeClass('active').find('.fa').removeClass('fa-minus').addClass('fa-plus');
	    });
	</script>
@endsection
