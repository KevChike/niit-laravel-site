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
						<a href="{{ config('app.instagram') }}" target="_blank" class="social_button_twitter"><i class="fa fa-instagram"></i></a> 
						<a href="{{ config('app.medium') }}" target="_blank" class="social_button_medium"><i class="fa fa-medium"></i></a>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-sm-7 contact_right">
				<form action="{{ url('/contact') }}" method="POST" autocomplete="off">

				{{-- Notification starts here --}}
				@if ( session()->has('success_msg') )
				<div class="row">
					<div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
						<span id="s_msg">{{ session()->get('success_msg') }}</span>
					</div>
				</div>
				@endif
				{{-- Notification ends here --}}

				{{ csrf_field() }}
					<div class="row">
						<div class="form-group @if($errors->has('name')) has-error @endif">
							<input type="text" name="name" class="form-control" placeholder="Name">
							@if ($errors->has('name'))
								<span class="help-block help-block-error">{{ $errors->first('name') }}</span>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="form-group @if($errors->has('email')) has-error @endif">
							<input type="email" name="email" class="form-control" placeholder="Email">
							@if ($errors->has('email'))
								<span class="help-block help-block-error">{{ $errors->first('email') }}</span>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="form-group @if($errors->has('subject')) has-error @endif">
							<input type="text" name="subject" class="form-control" placeholder="Subject">
							@if ($errors->has('subject'))
								<span class="help-block help-block-error">{{ $errors->first('subject') }}</span>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="form-group @if($errors->has('message')) has-error @endif">
							<textarea name="message" class="form-control" placeholder="Message"></textarea>
							@if ($errors->has('message'))
								<span class="help-block help-block-error">{{ $errors->first('message') }}</span>
							@endif
						</div>
					</div>			
					<div class="row">
						<div class="form-group">
							<button class="btn btn-primary">Send</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<section>
		<div class="map">
			<iframe src="{{ config('app.map') }}" style="border:0"></iframe>
		</div>
	</section>

@endsection
