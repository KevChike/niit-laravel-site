<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use App\Course;
use Mail;

class StaticPageDisplayController extends Controller
{
    public function index() 
    {
    	$events = Event::where('live', 1)
                    ->orderBy('event_start_date', 'ASC')
                    ->take(4)
                    ->get();

        $courses = Course::take(8)->get();

        return view('pages.index', compact('events', 'courses'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
    	return view('pages.contact');
    }

    public function sendContactPageMail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::send('pages.emails.feedback', [
                'sender_msg' => $request->message, 
                'sender_name' => $request->name, 
                'sender_email' => $request->email, 
                'sender_subject' => $request->subject
        ], function($message) {
            $message->to(config('app.feedback_email'));

            $message->subject(config('app.name') . ' Contact Page Feedback');
        });

        return redirect()->back()->with('success_msg', 'Thanks for saying hello. We will get back to you!');
    }

    public function event()
    {
        $events = Event::where('live', 1)
                    ->orderBy('event_start_date', 'asc')
                    ->paginate(12);

        return view('pages.events', compact('events'));
    }

    public function eventDetail($slug)
    {
        $event = Event::where('slug', $slug)->first();

        $related_courses = Course::inRandomOrder()->take(4)->get();

        if ( $event )
            return view('pages.event_detail', compact('event', 'related_courses')); 
        else
            return view('errors.404');
    }

    public function course()
    {
        $courses = Course::paginate(12);
        return view('pages.courses', compact('courses'));
    }

    public function courseDetails($slug)
    {
        $course = Course::where('slug', $slug)->first();

        $related_courses = Course::inRandomOrder()->take(4)->get();
        
        if ( $course )
            return view('pages.course_detail', compact('course', 'related_courses')); 
        else
            return view('errors.404');
    }
}
