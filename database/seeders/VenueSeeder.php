<?php

namespace Database\Seeders;

use App\Models\Venue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venues = [
            [
                'venue_name' => 'Wong Tai Sin Clinic',
                'location' => 'G/F, 1-2 Lung On House, Lower Wong Tai Sin Estate II, Kln.',
            ],
            [
                'venue_name' => 'Wan Chai Youth Health Care Centre',
                'location' => 'FPA Jockey Club Youth Zone, 8/F, Southorn Centre, 130 Hennessy Road, Wan Chai, H.K.',
            ],
            [
                'venue_name' => 'Mong Kok Youth Health Care Centre',
                'location' => 'Room A, 13/F, Full Win Commercial Centre, 573 Nathan Road, Kln.',
            ],
            [
                'venue_name' => 'Kwai Fong Youth Health Care Centre',
                'location' => 'Unit 702-705, Level 7, Tower II, Metroplaza, 223 Hing Fong Road, Kwai Chung, N.T.',
            ],
            [
                'venue_name' => 'Tsuen Wan Clinic',
                'location' => 'Room 1621-1622, 16/F, Nan Fung Centre, 264-298 Castle Peak Road, Tsuen Wan, N.T.',
            ],
        ];


        foreach($venues as $venue) {
            Venue::create([
                'venue_name' => $venue['venue_name'],
                'location' => $venue['location'],
            ]);
        }
    }
}
