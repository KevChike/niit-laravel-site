@extends('pages.templates.master')

@section('page_title')
<title>Courses &#8211; {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="">
@endsection

@section('keywords')
<meta name="keywords" content="">
@endsection

@section('content')
	<section class="course_section" id="section_1">
		<div class="container">
			<div class="section_title">
				<h2>Our Courses</h2>
			</div>
			<ul class="card_group">
				@forelse( $courses as $course )
					<li class="card">
						<a class="card_flex_display" href="/courses/{{ $course->slug }}">
							<span class="card_img">
								<img src="/img/course-img/{{ $course->slug }}.jpg" alt="{{ $course->course_title }}">
							</span>
							<span class="card_details card_flex_display card_flex">
								<span class="card_title">
									{{ $course->course_title }}
								</span>
								<span class="card_subtitle card_flex_display card_flex">
									{{ $course->category }}
								</span>
								<span class="card_flex_display card_flex card_footer">
									<i class="fa fa-clock-o footer_icon"></i><span class="duration card_flex"> {{ $course->duration }} </span>
								</span>
							</span>
						</a>
					</li>
				@empty
					<div class="note note-info">
	                    <h4 class="">No course avaliable</h4>
	                </div>
				@endforelse
			</ul>
			<div class="see_more_section">
				{{ $courses->links() }}
			</div>
		</div>
	</section>

@endsection
