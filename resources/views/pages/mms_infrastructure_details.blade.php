@extends('pages.templates.master')

@section('page_title')
<title>Master Mind Series Infrastructure Management &#8211; {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="The Master Mind Series - Infrastructure Management program builds a strong networking fundamnetals, enterprise network solutions management concepts and security solutions management and much more. NIIT provides an opprtunity to pursue specialization in Linux or Microsoft platform.">
@endsection

@section('keywords')
<meta name="keywords" content="Master Mind Series Infrastructure Management">
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
				<h1>MMS - INFRASTRUCTURE MANAGEMENT</h1>
			</div>	
			<div class="about-course">
				<div class="col-md-6">
					<div class="box">
						<form class="form-inline">
							<div class="form-group">
								<img src="{{ asset('assets/images/course-img/thumbnails/mms-infrastructure-management.jpg') }}" alt="" />
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
						<div> &#8211; PC Support Professional </div>						
						<div> &#8211; Network Administrator </div>						
						<div> &#8211; Server Administrator </div>						
						<div> &#8211; Enterprise Infrastructure Administrator </div>						
						<div> &#8211; Security Professional </div>						
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
									<input type="hidden" name="course" value="MMS Infrastructure Management">
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
								The Master Mind Series - Infrastructure Management program builds a strong networking fundamnetals, enterprise network solutions management concepts and security solutions management and much more. NIIT provides an opprtunity to pursue specialization in Linux or Microsoft platform.
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
													<li>Advanced Certificate in Information Technology</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Technologies You Will Learn</h2>
												<ul>
													<li><i class="fa fa-angle-double-right"></i> Working smart with Microsoft Office and the internet</li>
													<li><i class="fa fa-angle-double-right"></i> Installing, configuring ans troubleshooting a Windows PC</li>
													<li><i class="fa fa-angle-double-right"></i> RDBMS essentials T-SQL programming</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Job Opportunity</h2>
												<ul>
													<li>PC Support Professional</li>
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
													<li>Honors Diploma in Information Technology</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Technologies You Will Learn</h2>
												<ul>
													<li><i class="fa fa-angle-double-right"></i> CompTIA network+ protocols and internetworking standards</li>
													<li><i class="fa fa-angle-double-right"></i> Enterprise business desktop deployment</li>
													<li><i class="fa fa-angle-double-right"></i> Installing and configuring Windows Server 2012</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Job Opportunity</h2>
												<ul>
													<li>Network Administrator</li>
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
													<li>Advanced Diploma in Information Technology</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Technologies You Will Learn</h2>
												<ul>
													<li><i class="fa fa-angle-double-right"></i> Administering Windows Server 2012</li>
													<li><i class="fa fa-angle-double-right"></i> Configuring advanced Windows Server 2012 services</li>
													<li><i class="fa fa-angle-double-right"></i> Microsoft SQL Server 2012: Database administration</li>
													<li><i class="fa fa-angle-double-right"></i> CompTIA security +</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Job Opportunity</h2>
												<ul>
													<li>Server Administrator</li>
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
													<li>Professional Diploma in Information Technology</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Technologies You Will Learn</h2>
												<ul>
													<li><i class="fa fa-angle-double-right"></i> IT operations and infrastructure management</li>
													<li><i class="fa fa-angle-double-right"></i> Designing and implementing a server infrastructure</li>
													<li><i class="fa fa-angle-double-right"></i> Microsoft sharepoint 2013</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Job Opportunity</h2>
												<ul>
													<li>Enterprise Infrastructure Administrator</li>
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
													<li>Professional Diploma in Information Technology - Honors</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Technologies You Will Learn</h2>
												<ul>
													<li><i class="fa fa-angle-double-right"></i> Security fundamentals and implementation</li>
													<li><i class="fa fa-angle-double-right"></i> Introduction to networking design and management</li>
													<li><i class="fa fa-angle-double-right"></i> Cloud essentials</li>
													<li><i class="fa fa-angle-double-right"></i> Advanced Security Practitioner</li>
												</ul>
											</div>

											<div class="entry_profile mms_details">
												<h2>Job Opportunity</h2>
												<ul>
													<li>Security Professional</li>
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
