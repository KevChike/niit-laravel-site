<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;

class EventController extends Controller
{
    /*public function index()
    {
        $events = Event::where('live', 1)
                    ->orderBy('event_start_date', 'asc')
                    ->get();

        return view('pages.events', compact('events'));
    }*/

    /*public function create()
    {
        return view('errors.404');
    }

    public function store(Request $request)
    {
        return view('errors.404');
    }*/

    /*public function show($slug)
    {
        $event = Event::where('slug', $slug)->first();
        if ( $event )
            return view('pages.event_detail', compact('event')); 
        else
            return view('errors.404');
    }*/

    /*public function edit($id)
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
    }*/
}
