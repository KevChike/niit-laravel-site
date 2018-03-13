<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 footer_quick_link">
				<ul>
					<li><a href="{{ url('/courses') }}">Courses</a></li>
					<li><a href="{{ url('/events') }}">Events</a></li>
					<li><a href="{{ config('app.medium') }}">Blog</a></li>
					<li><a href="{{ url('/about') }}">About</a></li>
					<li><a href="{{ url('/contact') }}">Contact</a></li>
				</ul>	
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 footer_social_icon" >
				<span>Follow us on: </span>
				<a href="{{ config('app.facebook') }}" target="_blank" class="social_button_facebook"><i class="fa fa-facebook"></i></a> 
				<a href="{{ config('app.instagram') }}" target="_blank" class="social_button_twitter"><i class="fa fa-instagram"></i></a>
				<a href="{{ config('app.medium') }}" target="_blank" class="social_button_medium"><i class="fa fa-medium"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<p>Powered by <a href="http://campustechng.com">Campus Technologies Limited</a></p>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 copyright" >
				<p>Copyright © <?php echo date('Y'); ?> {{ config('app.name') }}. All rights reserved.</p>
			</div>
		</div>
	</div>
</footer>

@yield('scripts')
<script type="text/javascript">
	{{-- Show campaign notification after page load --}}
	setTimeout(function() {
		$('.campaign_notification').slideDown(300);
		$('.symbol').toggleClass("minus plus");
	}, 1500);

	{{-- Toggle Notification --}}
	$('.toogle_campaign_notification').on('click', function() {
		$('.campaign_notification').slideToggle();
		$('.symbol').toggleClass("minus plus");
	});
</script>
<script type="text/javascript" src="/assets/js/move-top.js"></script>
<script type="text/javascript" src="/assets/js/easing.js"></script>	
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<script src="/assets/plugins/bootstrap/js/bootstrap.js"></script>


</body>
</html>