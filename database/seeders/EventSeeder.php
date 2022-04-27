<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'organize_date' => '2022-05-27',
                'start_time' => '12:00',
                'end_time' => '15:00',
                'evt_detail' => 'Chinese Typing Class',
                'venue_id' => 1,
            ],
            [
                'organize_date' => '2022-06-17',
                'start_time' => '11:30',
                'end_time' => '13:30',
                'evt_detail' => 'Basket Ball Practice Class',
                'venue_id' => 2,
            ],
            [
                'organize_date' => '2022-06-22',
                'start_time' => '18:00',
                'end_time' => '20:00',
                'evt_detail' => 'Night Camping',
                'venue_id' => 3,
            ],
            [
                'organize_date' => '2022-07-12',
                'start_time' => '12:00',
                'end_time' => '16:00',
                'evt_detail' => 'Hiking is fun',
                'venue_id' => 4,
            ],
            [
                'organize_date' => '2022-05-11',
                'start_time' => '15:00',
                'end_time' => '18:00',
                'evt_detail' => 'Cooking is easy',
                'venue_id' => 5,
            ],
        ];


        foreach($events as $event) {
            Event::create([
                'organize_date' => $event['organize_date'],
                'start_time' => $event['start_time'],
                'end_time' => $event['end_time'],
                'evt_detail' => $event['evt_detail'],
                'venue_id' => $event['venue_id'],
            ]);
        }
    }
}
