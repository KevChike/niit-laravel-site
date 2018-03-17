	<footer>
		<div class="container">
			<div class="col-md-3 sec-1">
				<img src="{{ asset('assets/images/logo-') . config('app.slug') . '.png' }}" alt="" />
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
			</div>
			
			<div class="col-md-4 sec-2">
				<h3>Latest News</h3>
				<ul class="f-posts">
					<li>
						<div class="media">
						  <div class="media-left">
							<a href="#">
							  <img class="media-object" src="images/blog/f-1.png" alt="">
							</a>
						  </div>
						  <div class="media-body">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu unde.</p>
							<a href="#" class="r-btn">Read More</a>
						  </div>
						</div>
					</li>
					
					<li>
						<div class="media">
						  <div class="media-left">
							<a href="#">
							  <img class="media-object" src="images/blog/f-2.png" alt="">
							</a>
						  </div>
						  <div class="media-body">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu unde.</p>
							<a href="#" class="r-btn">Read More</a>
						  </div>
						</div>
					</li>
				</ul>
			</div>
			
			<div class="col-md-2 sec-3">
				<h3>Quick Links</h3>
				<ul class="q-links">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('courses') }}">Courses</a></li>
					<li><a href="{{ url('events') }}">Events</a></li>
					<li><a href="{{ url('blog') }}">Blog</a></li>
					<li><a href="{{ url('about') }}">About</a></li>
					<li><a href="{{ url('contact') }}">Contact</a></li>
				</ul>
			</div>
			
			<div class="col-md-3 sec-4">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-home"></i> <span> {{ config('app.address') }} </span></li>
					<li><i class="fa fa-phone"></i> <span> {{ config('app.phone1') }} </span></li>
					<li><i class="fa fa-phone"></i> <span> {{ config('app.phone2') }} </span></li>
					<li><i class="fa fa-envelope-o"></i> <span> {{ config('app.email') }} </span></li>
				</ul>
				<ul class="f-socials">
					<li><a href="{{ config('app.facebook') }}"><i class="fa fa-facebook"></i></a></li>
					<li><a href="{{ config('app.instagram') }}"><i class="fa fa-instagram"></i></a></li>
					<li><a href="{{ config('app.medium') }}"><i class="fa fa-medium"></i></a></li>
					{{-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
				</ul>
			</div>

		</div>
		
		<hr>
		
		<div class="container">
			<div class="col-md-12 bottom-bar">
				Copyright &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved. <br>
			</div>
		</div>
	</footer>
	
	<div class="scroll-top-wrapper ">
	  <span class="scroll-top-inner">
		<i class="fa fa-lg fa-angle-double-up"></i>
	  </span>
	</div>

	<!-- Jquery Libs -->
	<!-- Latest Version Of Jquery -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
	<!-- Bootstrap Jquery -->
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- mobile menu -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup core JS file -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- bxSlider Javascript file -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
	{{-- <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script> --}}
	<!-- Scroll top -->
	<script type="text/javascript" src="{{ asset('assets/js/to-top.js') }}"></script>
	<!-- Theme Custom -->
	<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
	
	@yield('scripts')

	
	<script>
		var revapi;
		jQuery(document).ready(function() {		
			revapi = jQuery("#rev_slider").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay:10000,
				navigation: {
					arrows:{enable:true},
					onHoverStop:"off",			
				},
				gridwidth:1230,
				gridheight:800		
			});		
		});	/*ready*/
	</script>


</body>
</html>