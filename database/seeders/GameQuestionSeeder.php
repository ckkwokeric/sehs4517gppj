<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GameQuestion;

class GameQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
            ['q_description' => "In the past month, how many times have you felt unexplainably exhausted?"],
            ['q_description' => "During the past 1 month, how often did you feel nervous?"],
            ['q_description' => "During the past 1 month, how often did you feel so nervous that nothing could calm you down?"],
            ['q_description' => "During the past 1 month, how often did you feel hopeless?"],
            ['q_description' => "During the past 1 month, how often did you feel restless or fidgety?"],
            ['q_description' => "During the past 1 month, how often did you feel so restless that you could not sit still?
            "],
            ['q_description' => "During the past 1 month, how often did you feel depressed?"],
            ['q_description' => "During the past 1 month, how often did you feel so depressed that nothing could cheer you up?
            "],
            ['q_description' => "During the past 1 month, how often did you feel that everything was an effort?"],
            ['q_description' => "During the past 1 month, how often did you feel worthless?"],
        ];

        foreach($fields as $field) {
            GameQuestion::create([
                'q_description' => $field['q_description']
            ]);
        }

    }
}
