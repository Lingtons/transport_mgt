<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssociateTransitsWithStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transits', function (Blueprint $table) {
            $table->integer('source_id')->unsigned()->index();
            $table->integer('destination_id')->unsigned()->index();
            $table->integer('current_location')->unsigned()->index();
            $table->foreign('source_id')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('destination_id')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('current_location')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transits', function (Blueprint $table) {
            $table->dropForeign(['source_id']);
            $table->dropForeign(['destination_id']);
            $table->dropForeign(['current_location']);
            $table->dropColumn('source_id');
            $table->dropColumn('destination_id');
            $table->dropColumn('current_location');
        });
    }
}
