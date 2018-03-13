@extends('pages.templates.master_scholarship')

@section('page_title')
<title>Scholarship &#8211; {{ config('app.name') }}</title>
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
<link href="/assets/css/scholarship_style.css" type="text/css" rel="stylesheet" media="all">
@endsection

@section('content')
	@if($event && $event->registration_end_date >= date('Y-m-d H:i:s'))
	
		<div class="notify_me">
		
		</div>

		<section class="notification_bar" title="Close notification">
			<div class="container-fluid">
				<div class="row" >
				@if ( session()->has('message') )
					<div class="alert alert-success alert-dismissable" style="text-align: center;border-radius: 0;margin: 0;font-size: 15px;">
						{{ session()->get('message') }}
					</div>
				@else
					<div class="note note-info">
						<h4 class="block">Important Notice!</h4>
						<p>
							Registration closes on <span>{{ $event->registration_end_date->format('l, jS F, Y') }}</span>; while scholarship test is <span>{{ $event->event_start_date->format('l, jS F, Y') }}</span>
						</p>
					</div>
				@endif
				</div>
			</div>
		</section>

		<section class="scholarship">
			<div class="container-fluid">
				<div class="row">
					<div id="owl-demo" class="owl-carousel" style="width: 100%;position: absolute;">
						<div class="item-owl">
							<img src="/assets/img/event-1.jpg" class="img-responsive">
						</div>
						<div class="item-owl">
							<img src="/assets/img/event-2.jpg" class="img-responsive">
						</div>
					</div>
				</div>

				<div class="reg_form_container" id="myForm">
					<div class="pull-right" style="padding: 10px 28px 0 0;">
						<span class="hide_btn" title="Minimize" id="hide_form"><i class="fa fa-minus"></i></span>
					</div>
					<div class="reg_form form_spinner_bg">
						<form autocomplete="off" id="scholarship_form"> {{-- method="POST" action="/scholarship"  --}}
							<h2>Scholarship Form</h2>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group @if($errors->has('name')) has-error @endif">
										<input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name" maxlength="75">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group @if($errors->has('gender')) has-error @endif">
										<select name="gender" class="form-control select">
											<option value="" selected="selected">Gender</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group @if($errors->has('phone')) has-error @endif">
										<input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone" maxlength="15">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group @if($errors->has('email')) has-error @endif">
										<input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" maxlength="75">
									</div>
								</div>
								<input type="hidden" value="{{ $event->uid }}" name="event_id">
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group @if($errors->has('status')) has-error @endif">
										<select name="status" class="form-control select">
											<option selected="selected" value="">Current Status</option>
											<option value="School">School</option>
											<option value="O Level">O Level</option>
											<option value="A Level">A Level</option>
											<option value="College - Year 1">College - Year 1</option>
											<option value="College - Year 2">College - Year 2</option>
											<option value="College - Year 3">College - Year 3</option>
											<option value="College - Year 4">College - Year 4</option>
											<option value="Polytechnic Employed">Polytechnic Employed</option>
											<option value="Polytechnic Unemployed">Polytechnic Unemployed </option>
											<option value="IT Graduate Employed">IT Graduate Employed</option>
											<option value="IT Graduate Unemployed">IT Graduate Unemployed</option>
											<option value="Non-IT Graduate Employed">Non-IT Graduate Employed</option>
											<option value="Non-IT Graduate Unemployed">Non-IT Graduate Unemployed</option>
											<option value="  Post Graduate Employed">Post Graduate Employed</option>
											<option value="Post Graduate Unemployed">Post Graduate Unemployed</option>
											<option value="Others">Others</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12 col-sm-12">
									<button class="btn button" name="send_msg">Send</button>
									{{ csrf_field() }}
								</div>
							</div>
						</form>
					</div>
					<div class="form_spinner"></div>
				</div>

				<button class="btn apply_btn" id="apply_now">
					Apply Now
					<span class="pull-rights"><i class="fa fa-plus"></i></span>
				</button>

			</div>
		</section>
	@else

		<section class="scholarship" style="background-color:rgba(137, 195, 176, 0.25); padding-top:2.5em;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="no_event">
							<h1>No Current Scholarship</h1>
						
							<div class="text-center">
								<h4 style="font-weight: 700;font-size: 17px;">Please, contact us for more info</h4>
								<h4><i class="fa fa-phone"></i> {{ config('app.phone1') }}</h4>
								<h4><i class="fa fa-envelope"></i> {{ config('app.email') }}</h4>
							</div>

							<div class="text-center">
								<a href="{{ config('app.facebook') }}" target="_blank" class="social_button_facebook"><i class="fa fa-facebook"></i></a> 
								<a href="{{ config('app.twitter') }}" target="_blank" class="social_button_twitter"><i class="fa fa-twitter"></i></a> 
								<a href="{{ config('app.medium') }}" target="_blank" class="social_button_medium"><i class="fa fa-medium"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	@endif

@endsection

@section('scripts')
<script type="text/javascript" src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="/assets/ajax/scholarship_form.js"></script>
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
<script type="text/javascript">
	$(document).ready(function() {
		$('.note').show();
		$('.notification_bar').click(function() {
			$('.note').slideUp();
		});
		$('.alert').click(function() {
			$('.alert').slideUp();
		});


		$('#apply_now').hide();
		$('#hide_form').click(function() {
			$('#myForm').animate({bottom: '-1800px', opacity: '0'});
			$('#apply_now').slideDown(400);
		});
		$('#apply_now').click(function() {
			$('#myForm').animate({bottom: '0px', opacity:'1'});
			$('#apply_now').slideUp(200);
		});
	});
</script>

<script type="text/javascript">
	$('.scroll_down a').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 1000);
	            return false;
	        }
	    }
	});
</script>

@endsection
