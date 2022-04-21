<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home-community');
    }

    public function about() {
        return view('pages.aboutus');
    }

    public function contact() {
        return view('pages.contactus');
    }
}
