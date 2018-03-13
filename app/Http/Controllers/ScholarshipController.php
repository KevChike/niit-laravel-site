<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Scholarship;
use App\Attendee;
use App\Event;

class ScholarshipController extends Controller
{
    public function scholarhsipRegistration()
    {
        $event = Event::where('event_type', 'scholarship')
                    ->where('event_end_date', '>=', date('Y-m-d H:i:s'))
                    ->first();
        
        return view('pages.scholarship', compact('event'));
    }

    public function postScholarhsipRegistration(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'status' => 'required'
        ]);

        /*Check if email has been used for a particular event*/
        $checkAttendeeEmail = Attendee::where('email', $request->email)
                                ->where('event_id', $request->event_id)
                                ->first();

        if(!$checkAttendeeEmail) {
            $attendee = new Attendee;
            $attendee->name = $request->name;
        	$attendee->gender = $request->gender;
        	$attendee->phone = $request->phone;
        	$attendee->email = $request->email;
            $attendee->uid = md5(time());
            $attendee->event_id = $request->event_id;
        	$attendee->attendee_current_status = $request->status;

            if($attendee->save()) {
                return response()->json(['success_msg' => 'Your application has been submitted!'], 200);
            } else {
                return response()->json(['error_msg' => 'Something went wrong!'], 500);
            }
        	//return redirect()->back()->with('message', 'Your application has been submitted!');
        }
        else{
            return response()->json(['error_msg' => 'This email has been used before!'], 500);
            //return redirect()->back()->with('error_msg', 'This email has been used before!');
        }
    }
}
