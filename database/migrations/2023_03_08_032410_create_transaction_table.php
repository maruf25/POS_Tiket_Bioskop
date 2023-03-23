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
        Schema::create('transaction', function (Blueprint $table) {
            $table->integer('ticket_id', true);
            $table->integer('user_id')->index('fk_ticket_user1_idx');
            $table->integer('idvoucher')->index('fk_transaction_voucher1_idx');
            $table->integer('timetable_id');
            $table->integer('theatre_id');
            $table->integer('film_id');
            $table->dateTime('date')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('unit_price', 10, 0);
            $table->float('final_price', 10, 0)->nullable();
            $table->float('total', 10, 0)->nullable();

            $table->index(['timetable_id', 'film_id', 'theatre_id'], 'fk_transaction_timetable1_idx');
            // $table->primary(['ticket_id', 'user_id', 'idvoucher', 'timetable_id', 'theatre_id', 'film_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
};
