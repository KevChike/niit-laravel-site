<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use App\Course;

class StaticPageDisplayController extends Controller
{
    public function index() 
    {
    	$events = Event::where('live', 1)
                    ->orderBy('event_date', 'asc')
                    ->take(5)
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
}
