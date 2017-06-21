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
					<img src="/img/about-img.jpg" class="img-responsive">
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

	<section class="alumni_section">
		<div class="tint_layer">
			<div class="container">
				<div class="section_title">
					<h2>Our Alumni</h2>
				</div>
				<div class="alumin_inner">
				    <div id="owl-demo" class="owl-carousel">
						<div class="item-owl">
							<div class="alumni_review">
								<p>
									<img src="/img/left-quotes.png" alt=""> 
									I am freelance Software Developer currently working on KadaOnline (www.facebook.com/kadacoders). I am a certified software Engineer from NIIT Kaduna, I have worked with Brainiac Software company as an intern. I am currently working on a software dictionary (https://github.com/deenkadirr). NIIT is a place for hard work and I am proud to be NIIT graduate.
									<img src="/img/right-quotes.png" alt="">
								</p>
								<div class="alumni_img">
									<img src="/img/alumni-1.jpg" class="img-responsive" alt=""/>
								</div>
								<h5>Shamsudeen Abdulkadir</h5>
							</div>
						</div>
						<div class="item-owl">
							<div class="alumni_review">
								<p>
									<img src="/img/left-quotes.png" alt=""> 
									I am a Network Engineer currently working with NIIT Kaduna. I am a certified Network Engineer from NIIT Kaduna. I currently work with NIIT as a Network Engineering Instructor. 
									<img src="/img/right-quotes.png" alt="">
								</p>
								<div class="alumni_img">
									<img src="/img/alumni-2.jpg" class="img-responsive" alt=""/>
								</div>
								<h5>Chidinmma</h5>
							</div>
						</div>
						<div class="item-owl">
							<div class="alumni_review">
								<p>
									<img src="/img/left-quotes.png" alt="">
									When I first came to NIIT, I was only looking forward to learn the basics of using a computer. But fortunately for me, I got a career as a software engineer who can develop Apps and Games for nearly every platform. I never knew Nigerians could develop Apps because I had the mindset that only the whites could make such, but NIIT changed that mindset. I now develop and teach people how to make Apps, thanks to NIIT.
									<img src="/img/right-quotes.png" alt="">
								</p>
								<div class="alumni_img">
									<img src="/img/alumni-3.jpg" class="img-responsive" alt=""/>
								</div>
								<h5>Abdulbasit Sa'id Ibrahim</h5>
							</div>
						</div>
		            </div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('scripts')
<script defer src="/plugins/flexslider/js/jquery.flexslider.js"></script>
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
<script src="/plugins/owl-carousel/js/owl.carousel.js"></script>
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
