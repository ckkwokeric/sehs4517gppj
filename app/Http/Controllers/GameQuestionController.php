<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameQuestion;
use Illuminate\Support\Facades\DB;



class GameQuestionController extends Controller
{
    public function showDashboard() {
        $gameQuestion = DB::table('game_questions')->get();
        return view('pages.youthgame.gamedashboard', ['gameQuestions' => $gameQuestion]);
    }

    public function processGameData(Request $request) {

        $errorMsg = '*This field is required';

        $this->validate( $request,
        [
            'q_1' => 'required',
            'q_2' => 'required',
            'q_3' => 'required',
            'q_4' => 'required',
            'q_5' => 'required',
            'q_6' => 'required',
            'q_7' => 'required',
            'q_8' => 'required',
            'q_9' => 'required',
            'q_10' => 'required',
        ],
        [
            'q_1.required' => $errorMsg,
            'q_2.required' => $errorMsg,
            'q_3.required' => $errorMsg,
            'q_4.required' => $errorMsg,
            'q_5.required' => $errorMsg,
            'q_6.required' => $errorMsg,
            'q_7.required' => $errorMsg,
            'q_8.required' => $errorMsg,
            'q_9.required' => $errorMsg,
            'q_10.required' => $errorMsg,
        ]);


        dd($request);


    }
}
