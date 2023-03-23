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
        Schema::table('timetable', function (Blueprint $table) {
            $table->foreign(['film_id'], 'fk_timetable_film1')->references(['film_id'])->on('film')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['theatre_id'], 'fk_timetable_theatre1')->references(['theatre_id'])->on('theatre')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('timetable', function (Blueprint $table) {
            $table->dropForeign('fk_timetable_film1');
            $table->dropForeign('fk_timetable_theatre1');
        });
    }
};
