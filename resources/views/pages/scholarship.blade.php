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
<link href="/css/scholarship_style.css" type="text/css" rel="stylesheet" media="all">
@endsection

@section('content')
	{{-- <section class="notify" title="Close notification">
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
                    	Last date to fill form is <span>14th July, 2017</span>; while scholarship test is <span>15th July, 2017</span>
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
						<img src="/img/event-1.jpg" class="img-responsive">
					</div>
					<div class="item-owl">
						<img src="/img/event-2.jpg" class="img-responsive">
					</div>
	            </div>
	        </div>

			<div class="reg_form_container" id="myForm">
				<div class="pull-right" style="padding: 10px 28px 0 0;">
					<span class="hide_btn" title="Minimize" id="hide_form"><i class="fa fa-minus"></i></span>
				</div>
				<div class="reg_form">
					<form method="POST" action="/scholarship" autocomplete="off">
						<h2>Scholarship Form</h2>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<input type="text" name="name" value="{{ old('name') }}" required class="form-control" placeholder="Name" maxlength="75">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<input type="text" name="phone" value="{{ old('phone') }}" required class="form-control" placeholder="Phone" maxlength="15">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<input type="email" name="email" value="{{ old('email') }}" required class="form-control" placeholder="Email" maxlength="75">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<select name="time" class="form-control select" required>
										 <option value="" selected="selected">Time</option>
						                <option value="9AM - 11AM">9AM - 11AM</option>
						                <option value="12PM - 2PM">12PM - 2PM</option>
						                <option value="3PM - 5PM">3PM - 5PM</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<select name="status" class="form-control select" required>
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
			</div>

			<button class="btn apply_btn" id="apply_now">
				Apply Now
				<span class="pull-rights"><i class="fa fa-plus"></i></span>
			</button>
		</div>
	</section> --}}

	<section class="scholarship">
		<div class="container">
			<div style="min-height: 50px;">&nbsp;</div>
			<div class="reg_form">
				<h2 style="text-transform: none;">No avaliable scholarship</h2>
				<div class="text-center" style="margin-top: 50px;">
					<h4 style="font-weight: 700;margin-bottom: 10px;">Please, contact us for more info</h4>
					<h4 style="margin-top:7px;"><i class="fa fa-map-marker"></i> {{ config('app.address') }}</h4>
					<h4 style="margin-top:7px;"><i class="fa fa-phone"></i> {{ config('app.phone1') }}</h4>
					<h4 style="margin-top:7px;"><i class="fa fa-phone"></i> {{ config('app.phone2') }}</h4>
					<h4 style="margin-top:7px;"><i class="fa fa-envelope"></i> {{ config('app.email') }}</h4>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('scripts')
<script src="/plugins/owl-carousel/js/owl.carousel.js"></script>
{{-- <script>
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
</script> --}}
{{-- <script type="text/javascript">
	$(document).ready(function() {
		$('.note').show();
		$('.notify').click(function() {
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
</script> --}}

{{-- <script type="text/javascript">
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
</script> --}}

@endsection
