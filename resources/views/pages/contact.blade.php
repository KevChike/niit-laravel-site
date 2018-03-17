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

@section('banner_title')
<h3>Contact Us</h3> <span class="location pull-right">You Are Here :  <a href="{{ url('/') }}">Home</a>  >  <span class="r-page">Contact Us</span></span>
@endsection

@section('content')
	
	<div class="contact contact-2">
		<div class="container">			
			<div class="cnt">
				<div class="col-md-7">
					<h3>Get in touch with us</h3>
					<form action="{{ url('/contact') }}" method="POST" autocomplete="off" id="details-form">
						{{ csrf_field() }}

						<div class="form-group @if($errors->has('name')) has-error @endif">
							<input type="text" name="name" class="form-control error" required placeholder="Enter Your Full Name">
							@if ($errors->has('name'))
								<span class="help-block help-block-error">{{ $errors->first('name') }}</span>
							@endif
						</div>

						<div class="form-group @if($errors->has('email')) has-error @endif">
							<input type="text" name="email" class="form-control" required placeholder="Enter Your Email">
							@if ($errors->has('email'))
								<span class="help-block help-block-error">{{ $errors->first('email') }}</span>
							@endif
						</div>

						<div class="form-group @if($errors->has('subject')) has-error @endif">
							<input type="text" name="subject" class="form-control" required placeholder="Enter Your Subject">
							@if ($errors->has('subject'))
								<span class="help-block help-block-error">{{ $errors->first('subject') }}</span>
							@endif
						</div>

						<div class="form-group @if($errors->has('message')) has-error @endif">
							<textarea name="message" required placeholder="Write Your Message" style="resize: none;"></textarea>
							@if ($errors->has('message'))
								<span class="help-block help-block-error">{{ $errors->first('message') }}</span>
							@endif
						</div>

						<div class="clearfix"></div>
						<button type="submit" class="p-btn" value="Send Message">SEND</button>
						
					</form>
				</div>
				
				<div class="col-md-5 info">
					<ul class="v-info">
						<li><i class="fa fa-home"></i> <span class="txt"> {{ config('app.address') }} </span></li>
						<li><i class="fa fa-phone"></i> <span class="txt"> {{ config('app.phone1') }} <br> {{ config('app.phone2') }} </span></li>
						<li><i class="fa fa-envelope-o"></i> <span class="txt"> {{ config('app.email') }} </span></li>
						<li><i class="fa fa-globe"></i> <span class="txt"> {{ config('app.website') }} </span></li>
					</ul>
				</div>
			</div>

			<div class="clearfix"></div>

			<div class="col-md-12 map">
				{{-- <div id="map"></div> --}}
				<iframe src="{{ config('app.map') }}" style="border:0; width:100%; min-height:400px; margin-bottom: 80px;"></iframe>
			</div>
					
		</div>
	</div>


@endsection

@section('scripts')
<!-- Google Maps -->
	{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="/assets/js/map.js"></script> --}}
@endsection
