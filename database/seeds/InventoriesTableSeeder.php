<?php

use Illuminate\Database\Seeder;
use App\Inventory;

class InventoriesTableSeeder extends Seeder
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
        Inventory::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $item = factory(\App\Item::class)->create();
        

        factory(\App\Inventory::class)
        			->create(['item_id' => $item->id,
        				]);
    }
}
