<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YouthController extends Controller
{
    public function youth1() {
        return view('pages.youths.youth1');
    }

    public function youth2() {
        return view('pages.youths.youth2');
    }

    public function youth3() {
        return view('pages.youths.youth3');
    }

    public function youth1_sub1() {
        return view('pages.youths.youth1-2');
    }

    public function youth1_sub2() {
        return view('pages.youths.youth1-3');
    }
}
