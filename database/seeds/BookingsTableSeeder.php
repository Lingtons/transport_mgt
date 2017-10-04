<?php

use Illuminate\Database\Seeder;
use App\Booking;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Booking::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $source = factory(\App\State::class)->create();
        $destination = factory(\App\State::class)->create();
        $location = factory(\App\State::class)->create();
        $user = factory(\App\User::class)->create();
        $transit = factory(\App\Transit::class)
        			->create(['source_id' => $source->id,
        				'destination_id' => $destination->id,
        				'current_location' => $location->id,
        				]);
        factory(\App\Booking::class)
        			->create(['user_id' => $user->id,
        				'transit_id' => $transit->id,
        				]);
    }
}
