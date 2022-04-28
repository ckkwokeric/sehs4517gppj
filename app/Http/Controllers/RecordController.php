<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\GameHistory;
use App\Models\EventEnrollment;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use PDF;

class RecordController extends Controller
{
    public function showRecordPage() {
        $users = User::all();
        $events = Event::all();
        $gameHistory = GameHistory::all();
        $eventEnrollments = EventEnrollment::all();
        $venues = Venue::all();
        return view('pages.account.record', [
            'users' => $users,
            'events' => $events,
            'venues' => $venues,
            'gameHistory' => $gameHistory,
            'eventEnrollments' => $eventEnrollments,
        ]);
    }

    public function createPDF() {
        $users = User::all();
        $events = Event::all();
        $gameHistory = GameHistory::all();
        $eventEnrollments = EventEnrollment::all();
        $venues = Venue::all();

        
        $pdf = PDF::loadView('pages.account.record',  compact('users', 'events', 'gameHistory', 'eventEnrollments', 'venues'))->setPaper('a3', 'landscape');

        return $pdf->download($pdfName);
    }
}
