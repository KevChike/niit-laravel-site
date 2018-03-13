@extends('pages.templates.master_career_fair')

@section('page_title')
<title>Career Fair &#8211; {{ config('app.name') }}</title>
@endsection

@section('page_description')
	@if($event)
		<meta name="description" content="{{ $event->event_title }}">
	@endif
@endsection

@section('keywords')
<meta name="keywords" content="">
@endsection

@section('style')
<link href="/assets/css/career_fair_style.css" type="text/css" rel="stylesheet" media="all">
@endsection

@section('content')
	@if($event && $event->registration_end_date >= date('Y-m-d H:i:s'))

		<div class="notify_me">
		
		</div>

		<section class="career_fair_section">
			<div class="container">
				<div class="form_bg form_spinner_bg">
					<form id="career_fair_form" autocomplete="off" {{--  method="POST" action="{{ url('/career-fair/register') .'/'. $event->slug }}  --}}">
						{{--  {{ csrf_field() }}  --}}
						<div class="row">
							<div class="col-md-12">
								<h3>Career Fair Registration</h3>
							</div>
						</div>

						@if ( session()->has('success_msg') )
						<div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<span id="s_msg">{{ session()->get('success_msg') }}</span>
						</div>
						@endif

						@if ( session()->has('error_msg') )
							<div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
								<span id="e_msg">{{ session()->get('error_msg') }}</span>
							</div>
						@endif

						<div class="row">
							<div class="col-md-12">
								<div class="form-group @if($errors->has('name')) has-error @endif">
									<input type="text" name="name" class="form-control" placeholder="Full Name" maxlength="75" value="{{ old('name') }}">
									@if ($errors->has('name'))
										<span class="help-block help-block-error">{{ $errors->first('name') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group @if($errors->has('gender')) has-error @endif">
									<select class="form-control" name="gender">
										<option value="">Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									@if ($errors->has('gender'))
										<span class="help-block help-block-error">{{ $errors->first('gender') }}</span>
									@endif
								</div>
								<input type="hidden" name="event_id" value="{{ $event->uid }}">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group @if($errors->has('email')) has-error @endif">
									<input type="email" name="email" class="form-control" placeholder="Email" maxlength="75" value="{{ old('email') }}">
									@if ($errors->has('email'))
										<span class="help-block help-block-error">{{ $errors->first('email') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group @if($errors->has('phone')) has-error @endif">
									<input type="text" name="phone" class="form-control" placeholder="Phone number" maxlength="18" value="{{ old('phone') }}">
									@if ($errors->has('phone'))
									<span class="help-block help-block-error">{{ $errors->first('phone') }}</span>
								@endif
								</div>
							</div>
						</div>
						<div class="row">		
							<div class="col-md-12">
								<div class="form-group">
									<button class="btn btn-primary" id="submit_form">Send</button>
								</div>
							</div>
						</div>
					</form>
				</div>

				<div class="form_spinner"></div>
			</div>
		</section>
	@else

		<section class="career_fair_section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="no_event">
							<h1>No Current Career Fair</h1>
						
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
<script type="text/javascript" src="/assets/ajax/career_fair_form.js"></script>
@endsection
