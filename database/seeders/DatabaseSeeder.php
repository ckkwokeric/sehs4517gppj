<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Venue;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::unguard();
        Venue::unguard();
        Event::unguard();

        $this->call(UsersSeeder::class);
        $this->call(VenueSeeder::class);
        $this->call(EventSeeder::class);

        User::reguard();
        Venue::reguard();
        Event::reguard();
    }
}
