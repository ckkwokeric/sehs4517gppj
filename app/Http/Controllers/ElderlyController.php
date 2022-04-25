<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElderlyController extends Controller
{
    public function activities() {
        return view('pages.elderly.activities4elderly');
    }

    public function developmentService() {
        return view('pages.elderly.elderlydevelopmentservices');
    }

    public function support() {
        return view('pages.elderly.elderlysupport');
    }

    public function welling() {
        return view('pages.elderly.welling4elderly');
    }
}
