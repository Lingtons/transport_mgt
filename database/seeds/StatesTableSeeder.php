<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	State::truncate();
    	DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory(\App\State::class, 33)->create();
    }
}
