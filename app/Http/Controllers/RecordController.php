<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function showRecordPage() {
        return view('pages.account.record');
    }
}
