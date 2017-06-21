<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Scholarship;

class ScholarshipController extends Controller
{
     public function index()
    {
        return view('pages.scholarship');
    }

    public function store(Request $request)
    {
    	$scholarship = new Scholarship;
    	$scholarship->name = $request->name;
    	$scholarship->phone = $request->phone;
    	$scholarship->email = $request->email;
    	$scholarship->time = $request->time;
    	$scholarship->status = $request->status;

    	$scholarship->save();

    	return redirect()->back()->with('message', 'Your application has been submitted!');
    }
}
