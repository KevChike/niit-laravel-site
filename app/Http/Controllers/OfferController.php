<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendee;
use App\Event;
use Mail;

class OfferController extends Controller
{
    public function registerForOffer()
    {
    	$event = Event::where('event_type', 'offer')
                    ->where('event_end_date', '>=', date('Y-m-d H:i:s'))
                    ->first();

        if($event) {
        	return view('pages.offers', compact('event'));
        } else {
        	return view('pages.offers', compact('event'));
        }
    	// return view('pages.offers');
    }

    public function postRegisterForOffer(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city_of_residence' => 'required'
        ]);

        /*Check if email has been used for a particular event*/
        $checkAttendeeEmail = Attendee::where('email', $request->email)
        						->where('event_id', $request->event_id)
        						->first();

        if(!$checkAttendeeEmail) {
            /* Get the details of the event */
            $event = Event::where('uid', $request->event_id)->first();
            
            $attendee = new Attendee;

	        $attendee->name = $request->name;
	        $attendee->gender = $request->gender;
	        $attendee->email = $request->email;
	        $attendee->uid = md5(time());
	        $attendee->phone = $request->phone;
	        $attendee->event_id = $request->event_id;
	        $attendee->city_of_residence = $request->city_of_residence;

	        /*
			 * Send confirmation email to attendee
			*/
	        /*Mail::send('pages.emails.career_fair_confirmation', [
	                'attendee_name' => $request->name, 
	                'attendee_email' => $request->email,
                    'event_title' => $event->event_title,
                    'event_start_date' => $event->event_start_date->format('l, jS F, Y'),
                    'event_end_date' => $event->event_end_date->format('l, jS F, Y'),
                    'event_time' => $event->event_time,
	        ], function($message) use ($request) {
	            $message->to($request->email);

	            $message->subject('Confirmation Email');
	        });*/

	        if($attendee->save()) {
	        	return response()->json(['success_msg' => 'Submitted successfully!'], 200);
	        } else {
	        	return response()->json(['error_msg' => 'Something went wrong!'], 500);
	        }

        }
        else{
        	return response()->json(['error_msg' => 'This email has been used before!'], 500);
        }

    }
}
