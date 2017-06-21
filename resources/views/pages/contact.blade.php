@extends('pages.templates.master')

@section('page_title')
<title>Contact Us &#8211; {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="">
@endsection

@section('keywords')
<meta name="keywords" content="">
@endsection

@section('content')
	<section class="contact_section">
		<div class="container">
			<div class="col-md-6 col-sm-5 contact_left">
				<div class="row">
					<h2>Say Hello</h2>
					<p>
						<span>Address:</span><br>{{ config('app.address') }} 
					</p>
					<p class="phone"><span>Phone: </span><br>{{ config('app.phone1') }}, <br>{{ config('app.phone2') }} </p>
					<p class="email"><span>Email: </span><br>{{ config('app.email') }} </p>
					<h3>Follow us on</h3>
					<div class="social_icon">
						<a href="{{ config('app.facebook') }}" target="_blank" class="social_button_facebook"><i class="fa fa-facebook"></i></a> 
						<a href="{{ config('app.twitter') }}" target="_blank" class="social_button_twitter"><i class="fa fa-twitter"></i></a> 
						<a href="{{ config('app.medium') }}" target="_blank" class="social_button_medium"><i class="fa fa-medium"></i></a>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-sm-7 contact_right">
				<div class="row">
					<div class="form-group">
						<input type="text" name="fullname" class="form-control" placeholder="Name">
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<input type="text" name="subject" class="form-control" placeholder="Subject">
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<textarea name="message" class="form-control" placeholder="Message"></textarea>
					</div>
				</div>			
				<div class="row">
					<div class="form-group">
						<button class="btn btn-primary">Send</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="map">
			<iframe src="{{ config('app.map') }}" style="border:0"></iframe>
		</div>
	</section>

@endsection
