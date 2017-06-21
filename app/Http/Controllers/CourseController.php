<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(12);
        return view('pages.courses', compact('courses'));
    }

    public function create()
    {
        return view('errors.404');
        /*$course = new Course;
        $course->category = 'Rapid Employability Programmes';
        $courseTitle = 'Certificate Programme in MIS Skills';
        $course->course_title = $courseTitle;
        $course->course_details = '';
        $course->duration = '144 hours';
        $course->slug = $courseTitle;
        $course->save();*/
    }

    public function store(Request $request)
    {
        return view('errors.404');
    }

    public function show($slug)
    {
        $course = Course::where('slug', $slug)->first();
        if ( $course )
            return view('pages.course_detail', compact('course')); 
        else
            return view('errors.404');
    }

    public function edit($id)
    {
        return view('errors.404');
    }

    public function update(Request $request, $id)
    {
        return view('errors.404');
    }

    public function destroy($id)
    {
        return view('errors.404');
    }
}
