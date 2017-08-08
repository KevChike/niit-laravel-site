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
				<a href="{{ config('app.twitter') }}" target="_blank" class="social_button_twitter"><i class="fa fa-twitter"></i></a> 
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
<script type="text/javascript" src="/js/move-top.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>	
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
<script src="/plugins/bootstrap/js/bootstrap.js"></script>


</body>
</html>