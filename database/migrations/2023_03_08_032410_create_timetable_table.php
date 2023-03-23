<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetable', function (Blueprint $table) {
            $table->integer('timetable_id', true);
            $table->integer('film_id')->index('fk_timetable_film1_idx');
            $table->date('date')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->string('day_type', 8)->nullable();
            $table->float('unit_price', 10, 0)->nullable();
            $table->integer('theatre_id')->index('fk_timetable_theatre1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timetable');
    }
};
