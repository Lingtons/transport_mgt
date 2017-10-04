<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transit_code');
            $table->time('arrival_time');
            $table->time('departure_time');
            $table->timestamp('travel_date');
            $table->enum('status', ['transit','complete','accident']);
            $table->float('amount');
            $table->integer('number_of_seats');
            $table->integer('available_seats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transits');
    }
}
