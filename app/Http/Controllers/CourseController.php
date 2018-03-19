<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Course;
use Mail;

class CourseController extends Controller
{
    public function course()
    {
        $courses = Course::paginate(8);
        return view('pages.courses', compact('courses'));
    }

    public function courseDetails($slug)
    {
        $course = Course::where('slug', $slug)->first();

        $related_courses = Course::inRandomOrder()->take(4)->get();
        
        if ( $course )
            return view('pages.course_detail', compact('course', 'related_courses')); 
        else
            abort('404');
    }

    public function postConsent(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'phone' => 'required'
        ]);

        Mail::send('pages.emails.interest-mail', [
                'interested_course' => $request->course, 
                'sender_name' => ucwords($request->name),
                'sender_email' => strtolower($request->email), 
                'sender_phone' => $request->phone
        ], function($message) {
            $message->to(config('app.feedback_email'));

            $message->subject(config('app.name') . ' Someone is interested in a course');
        });

        $cookie_name = str_slug($request->course);
        $cookie_value = $request->course;
        setcookie($cookie_name, $cookie_value, time() + (3600), "/"); // 3600 = 1 hour i.e 60sec * 60min = 3600secs

        return redirect()->back()->with('success_msg', 'We will get back to you very soon!');
    }

    public function mmsSoftware($slug)
    {
        if($slug == 'mms-software-engineering'){
            $related_courses = Course::inRandomOrder()->take(4)->get();

            return view('pages.mms_software_details',compact('slug', 'related_courses'));

        } else {
            abort('404');
        }
    }

    public function mmsInfrastructure($slug)
    {
        if($slug == 'mms-infrastructure-management'){
            $related_courses = Course::inRandomOrder()->take(4)->get();

            return view('pages.mms_infrastructure_details',compact('slug', 'related_courses'));

        } else {
            abort('404');
        }
    }
}
