<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        DB::table('events')->where('evt_id', $evt_id)->update(['user_id' => $user_id]);
        return back()->with('joinSuccess', 'You have successfully joined the activity');
    }

}
