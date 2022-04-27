<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EventEnrollment;

class ActivitiesServicesController extends Controller
{
    public function newActivities() {
        $results = DB::table('events')->get();
        return view('pages.new.newactivities', ['results' => $results]);
    }

    public function newServices() {
        return view('pages.new.newservices');
    }

    public function subService1() {
        return view('pages.new.services1');
    }

    public function subService2() {
        return view('pages.new.services2');
    }

    public function subService3() {
        return view('pages.new.services3');
    }


    public function joinActivity(Request $request, $evt_id, $user_id) {

        // Check if the user have previously joined the event
        // If so, no record will be added to the database and redirect back to the page with warning message
        if (EventEnrollment::where('user_id', $user_id)->where('evt_id', $evt_id)->first()) {
            return back()->with('joinMsg', 'You are not allowed to join a event twice!');
        }

        EventEnrollment::create([
            'user_id' => $user_id,
            'evt_id' => $evt_id,
        ]);

        return back()->with('joinMsg', 'You have successfully joined the activity');
    }

}
