<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);

        $this->call(ItemsTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(TransitsTableSeeder::class);
        $this->call(BookingsTableSeeder::class);
        $this->call(InventoriesTableSeeder::class);
        $this->call(LaratrustSeeder::class);

    }
}
