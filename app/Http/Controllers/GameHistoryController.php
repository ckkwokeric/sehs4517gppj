<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\GameHistory;

class GameHistoryController extends Controller
{
    public function showResultPage() {
        $data = session('totalScore');
        session()->forget('totalScore');
        return view('pages.youthgame.result', ['data' => $data]);
    }
}
