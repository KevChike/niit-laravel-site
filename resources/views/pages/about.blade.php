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

@section('content')
	<section class="about_banner">
		<div class="tint_layer">
			<div class="container">
				<div class="section_title">
					<h2 style="">Why NIIT</h2>
				</div>
				<div class="flexslider" style="">
					<ul class="slides">
						<li>
							<div class="banner_text">
								<h2>Conducive learning environment</h2>
							</div>
						</li>
						<li>
							<div class="banner_text">
								<h3>Practical approach to learning</h3>
							</div>
						</li>
						<li>
							<div class="banner_text">
								<h3>Interact with world class trainers</h3>
							</div>
						</li>
						<li>
							<div class="banner_text">
								<h3>Globally-recognized NIIT certification</h3>
							</div>
						</li>
						<li>
							<div class="banner_text">
								<h3>Gain highly employable skills</h3>
							</div>
						</li>
						<li>
							<div class="banner_text">
								<h3>Gain real-world experience</h3>
							</div>
						</li>
						<li>
							<div class="banner_text">
								<h3>Keep up with industry trends</h3>
							</div>
						</li>
						<li>
							<div class="banner_text">
								<h3>Partake in regular free ICT workshops</h3>
							</div>
						</li>
					</ul> 
				</div>
			</div>
		</div>
	</section>
	<section class="about_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>About NIIT Nigeria</h2>
					<p>
						NIIT established its presence in Nigeria in 1999 and since then affirmed its support to prepare the youth in the country for lucrative IT careers. NIIT trains over 16,000 students in Nigeria every year and has shaped the careers of over 160,000 students in the past 16 years. Now NIIT has operational centres in Abuja and Kaduna and is acknowledged as the undisputed leader in the country's IT training and education segment.
					</p>
				</div>
				{{-- <div class="col-md-3">
					
				</div> --}}
			</div>
			<div class="row">
				<div class="col-md-6 about_img">
					<img src="/assets/img/about-img.jpg" class="img-responsive">
				</div>
				<div class="col-md-5 col-md-offset-1">
					<h2>About NIIT</h2>
					<p>
						Established in 1981, NIIT Limited, a global leader in Skills and Talent Development, offers multi-disciplinary learning management and training delivery solutions to corporations, institutions, and individuals in over 40 countries. NIIT has three main lines of business across the globe- Corporate Learning Group, Skills and Careers Group, and School Learning Group.
					</p>
				</div>
			</div>
		</div>
	</section>

	@include('pages.templates.partials._alumni')

@endsection

@section('scripts')
<script defer src="/assets/plugins/flexslider/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
</script>
<script src="/assets/plugins/owl-carousel/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
	});
</script>
@endsection
