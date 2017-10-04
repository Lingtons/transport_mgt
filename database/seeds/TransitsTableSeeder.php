<?php

use Illuminate\Database\Seeder;
use App\Transit;

class TransitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Transit::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $source = factory(\App\State::class)->create();
        $destination = factory(\App\State::class)->create();

        factory(\App\Transit::class)
        			->create(['source_id' => $source->id,
        				'destination_id' => $destination->id,
        				'current_location' => $source->id,
        				]);
    }
}
