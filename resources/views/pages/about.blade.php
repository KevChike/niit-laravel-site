@extends('pages.templates.master')

@section('page_title')
<title>About Us &#8211; {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="">
@endsection

@section('keywords')
<meta name="keywords" content="">
@endsection

@section('style')
<link rel="stylesheet" href="/assets/plugins/flexslider/css/flexslider.css" type="text/css" media="all" property="" />
<link href="/assets/plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet">
@endsection

@section('banner_title')
<h3>About Us</h3> <span class="location pull-right">You Are Here :  <a href="{{ url('/') }}">Home</a>  >  <span class="r-page">About Us</span></span>
@endsection

@section('content')

	<div class="about">
		<div class="container">
			<div class="col-md-5 col-sm-12 ab-main">
				<div class="txt-1">Welcome To</div>
				<div class="txt-2"> <span class="color-2">{{ config('app.mother_company') }}</span> {{ strtoupper(config('app.niit_center')) }} </div>
				<div class="txt-3">“Learn the right way at NIIT”</div>
				<p>
					Established in 1981, NIIT Limited, a global leader in Skills and Talent Development, offers multi-disciplinary learning management and training delivery solutions to corporations, institutions, and individuals in over 40 countries. NIIT has three main lines of business across the globe- Corporate Learning Group, Skills and Careers Group, and School Learning Group.
				</p>
				<p>
					NIIT established its presence in Nigeria in 1999 and since then affirmed its support to prepare the youth in the country for lucrative IT careers. NIIT trains over 16,000 students in Nigeria every year and has shaped the careers of over 160,000 students in the past 16 years. Now NIIT has operational centres in Abuja and Kaduna and is acknowledged as the undisputed leader in the country's IT training and education segment.
				</p>
			</div>
			<div class="col-md-6 col-md-offset-1 col-sm-12" style="margin-top: 55px;">
				<img src="{{ asset('assets/images/about-img.jpg') }}" class="img-responsive s-pic" alt="" />
			</div>
		</div>
	</div>

	@include('pages.templates.partials._fact-bar')

	<div class="why">
		<div class="container">
			<div class="col-md-12">
				<h2>Why NIIT ?</h2>
			</div>
			<div class="col-md-4">
				<p>NIIT is Africa’s largest information technology Education provider. With over 36 years in IT training, boasting over 5 million students worldwide. Besides the many awards achieved by NIIT, like ‘The Most Trusted Education Brand 2017’ and ‘Best Innovation Brand in the Education Sector’.</p>
			</div>
			<div class="col-md-4">
				<p>NIIT has many career programs that have helped thousands of students who have decided to prepare for a career in IT along college. NIIT are the pioneers in providing training on every latest technology like Big Data, Digital Marketing and Java.  NIIT has made her learning methodology to be project based.</p>
			</div>
			<div class="col-md-4">
				<p>NIIT is now a Global Education &amp; Training company with presence in over 40 countries. NIIT has highly experience and certified instructors, globally recognized certification, learning resources like physical courseware, reference sites, online assessment and many more for each student.</p>
			</div>
		</div>
	</div>

	@include('pages.templates.partials._alumni')

	@include('pages.templates.partials._partners-universities')

@endsection
