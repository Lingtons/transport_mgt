<?php

use Illuminate\Database\Seeder;
use App\Item;
class ItemsTableSeeder extends Seeder
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
        Item::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory(\App\Item::class, 3)->create();
    }
}
