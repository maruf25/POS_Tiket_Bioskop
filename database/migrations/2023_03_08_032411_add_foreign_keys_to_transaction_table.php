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
        Schema::table('transaction', function (Blueprint $table) {
            $table->foreign(['user_id'], 'fk_ticket_user1')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['timetable_id', 'film_id', 'theatre_id'], 'fk_transaction_timetable1')->references(['timetable_id', 'film_id', 'theatre_id'])->on('timetable')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['idvoucher'], 'fk_transaction_voucher1')->references(['idvoucher'])->on('voucher')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction', function (Blueprint $table) {
            $table->dropForeign('fk_ticket_user1');
            $table->dropForeign('fk_transaction_timetable1');
            $table->dropForeign('fk_transaction_voucher1');
        });
    }
};
