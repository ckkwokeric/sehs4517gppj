<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesServicesController extends Controller
{
    public function newActivities() {
        return view('pages.new.newactivities');
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
}
