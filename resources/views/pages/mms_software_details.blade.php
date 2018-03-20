@extends('pages.templates.master')

@section('page_title')
<title>Master Mind Series Software Engineering &#8211; {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="The Master Mind Series - Software Engineering program builds a strong found in ICT, software engineering principles, enterprise development frameworks, project management and much more. This course focuses on developing skills in .NET and J2EE Technologies.">
@endsection

@section('keywords')
<meta name="keywords" content="Master Mind Series Software Engineering">
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
<h3>Course Details</h3> <span class="location pull-right">You Are Here :  <a href="{{ url('/') }}">Home</a>  >  <a href="{{ url('courses') }}">Courses</a>  >  <span class="r-page">Course Details</span></span>
@endsection

@section('content')
	
	<div class="course-single">
		<div class="container">
			<div class="col-md-12">
				<h1>MMS - SOFTWARE ENGINEERING</h1>
			</div>	
			<div class="about-course">
				<div class="col-md-6">
					<div class="box">
						<form class="form-inline">
							<div class="form-group">
								<img src="{{ asset('assets/images/course-img/thumbnails/mms-software-engineering.jpg') }}" alt="" />
							</div>
							<div class="form-group">
								<div class="g-box">
									<div class="info">
										<h3>Duration: 2 years</h3>
										<div class="stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="date">
											Professional Diploma
										</div>
									</div>
								</div>
							</div>	
						</form>
					</div>
					<div class="about-author">
						<div class="a-name">JOB OPPORTUNITIES:</div>
						<div> &#8211; Database Analyst </div>						
						<div> &#8211; Web Application Developer (using Java) </div>						
						<div> &#8211; Distributed Applications Developer (Java) </div>						
						<div> &#8211; .NET Web Application Developer </div>						
						<div> &#8211; Distributed Applictions Developer (.NET) </div>						
						<br>

						@if(isset($_COOKIE['mms-software-engineering']))
							<div class="a-position">Thanks for showing interest in this course</div>
							<a href="{{ url('courses') }}" class="c-btn">SEE MORE COURSES</a>
						@else
							<div class="a-position">Are you interested in this course?</div>
							<a href="javascript:;" class="c-btn" id="yes">YES, I AM</a>
						@endif
						<br>
						
						@if(isset($_COOKIE['mms-software-engineering']))
							<div id="consent_form" style="padding: 30px 30px 0; display: none;">
								<div class="r-txt">You sent a message not too long</div>
							</div>
						@else
							<div id="consent_form" class="consent_form" style="display: none;">
								<div class="r-txt">Please, enter your details so that we can get back to you</div>
								<form action="{{ url('/courses') }}" method="POST" autocomplete="off">
									{{ csrf_field() }}
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Enter Your Full Name" maxlength="100">
										@if ($errors->has('name'))
											<span class="text-danger">{{ $errors->first('name') }}</span>
										@endif
									</div>
									<div class="form-group">
										<input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number" maxlength="14">
										@if ($errors->has('phone'))
											<span class="text-danger">{{ $errors->first('phone') }}</span>
										@endif
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="100">
										@if ($errors->has('email'))
											<span class="text-danger">{{ $errors->first('email') }}</span>
										@endif
									</div>
									<input type="hidden" name="course" value="MMS Software Engineering">
									<button class="l-btn btn" style="border-radius: 0;">Am interested</button>
								</form>
							</div>
						@endif
					</div>
				</div>
				
				<div class="col-md-6 right">
				  <ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#t1" aria-controls="t1" role="tab" data-toggle="tab">Course Description</a></li>
				  </ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="t1">
							<p>
								The Master Mind Series - Software Engineering program builds a strong found in ICT, software engineering principles, enterprise development frameworks, project management and much more. This course focuses on developing skills in .NET and J2EE Technologies.
							</p>

							<div class="row">
								<div class="col-md-12 faq-all">
									<div class="faq-q">
										<input type="checkbox" id="question1" name="q"  class="questions">
										<div class="plus">+</div>
										<label for="question1" class="question">
										Semester 1
										</label>
										<div class="answers" style="padding-top: 10px;">
											<div class="entry_profile mms_details">
												<h2>Cetificate Title</h2>
												<ul>
													<li>Advanced Certificate in Information Technology (Software Engineering)</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Technologies You Will Learn</h2>
												<ul>
													<li><i class="fa fa-angle-double-right"></i> Working smart with Microsoft Office and the internet</li>
													<li><i class="fa fa-angle-double-right"></i> Logic building and effective problem solving</li>
													<li><i class="fa fa-angle-double-right"></i> RDBMS essentials T-SQL programming</li>
													<li><i class="fa fa-angle-double-right"></i> Advance Excel tools techniques for analysing data</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Job Opportunity</h2>
												<ul>
													<li>Database Analyst</li>
												</ul>
											</div>
										</div>
									</div>
									
									<div class="faq-q">
										<input type="checkbox" id="question2" name="q" class="questions">
										<div class="plus">+</div>
										<label for="question2" class="question">
										Semester 2
										</label>
										<div class="answers" style="padding-top: 10px;">
											<div class="entry_profile mms_details">
												<h2>Cetificate Title</h2>
												<ul>
													<li>Honors Diploma in Information Technology (Software Engineering)</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Technologies You Will Learn</h2>
												<ul>
													<li><i class="fa fa-angle-double-right"></i> Programming in Java</li>
													<li><i class="fa fa-angle-double-right"></i> HTML 5 programming</li>
													<li><i class="fa fa-angle-double-right"></i> Developing web applications using servlets and JSP</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Job Opportunity</h2>
												<ul>
													<li>Web Application Developer (using Java)</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="faq-q">
										<input type="checkbox" id="question3" name="q" class="questions">
										<div class="plus">+</div>
										<label for="question3" class="question">
										Semester 3
										</label>
										<div class="answers" style="padding-top: 10px;">
											<div class="entry_profile mms_details">
												<h2>Cetificate Title</h2>
												<ul>
													<li>Advanced Diploma in Information Technology (Software Engineering)</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Technologies You Will Learn</h2>
												<ul>
													<li><i class="fa fa-angle-double-right"></i> Developing mobile apps on the andriod platform</li>
													<li><i class="fa fa-angle-double-right"></i> Implementing JSF, hibernate and spring in java</li>
													<li><i class="fa fa-angle-double-right"></i> EE applications</li>
													<li><i class="fa fa-angle-double-right"></i> Automated testing using JUnit</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Job Opportunity</h2>
												<ul>
													<li>Distributed Applications Developer (Java)</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="faq-q">
										<input type="checkbox" id="question4" name="q" class="questions">
										<div class="plus">+</div>
										<label for="question4" class="question">
										Semester 4
										</label>
										<div class="answers" style="padding-top: 10px;">
											<div class="entry_profile mms_details">
												<h2>Cetificate Title</h2>
												<ul>
													<li>Professional Diploma in Information Technology (Software Engineering)</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Technologies You Will Learn</h2>
												<ul>
													<li><i class="fa fa-angle-double-right"></i> Object Oriented Programming usinf C#</li>
													<li><i class="fa fa-angle-double-right"></i> Developing web applications using ASP .NET</li>
													<li><i class="fa fa-angle-double-right"></i> Developing Windows store apps using HTML 5 and JavaScript</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Job Opportunity</h2>
												<ul>
													<li>.NET Web Application Developer</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="faq-q">
										<input type="checkbox" id="question5" name="q" class="questions">
										<div class="plus">+</div>
										<label for="question5" class="question">
										Semester 5
										</label>
										<div class="answers" style="padding-top: 10px;">
											<div class="entry_profile mms_details">
												<h2>Cetificate Title</h2>
												<ul>
													<li>Professional Diploma in Information Technology - Honors (Software Engineering)</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Technologies You Will Learn</h2>
												<ul>
													<li><i class="fa fa-angle-double-right"></i> Developing advanced web applications</li>
													<li><i class="fa fa-angle-double-right"></i> Using ASP .NET MVC</li>
													<li><i class="fa fa-angle-double-right"></i> Developing touch and mobile devices</li>
													<li><i class="fa fa-angle-double-right"></i> Responsive web design using HTML 5 and jQuery</li>
													<li><i class="fa fa-angle-double-right"></i> Software engineering capstone project</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Job Opportunity</h2>
												<ul>
													<li>Distributed Applications Developer (.NET)</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
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

@section('scripts')
	<script type="text/javascript">
		$('document').ready(function(){
			
			$('#yes').click(function(){
				$('#consent_form').slideToggle(function(){
					if($('#yes').text() == 'YES, I AM'){
						$('#yes').text('MAYBE LATER');
					} else {
						$('#yes').text('YES, I AM');
					}
				});
			});

		});
	</script>

@endsection
