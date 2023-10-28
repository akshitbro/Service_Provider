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
        Schema::create('register_for_qr_code1', function (Blueprint $table) {
            $table->increments('id');
            $table->text('r1_name1');
            $table->text('r1_contactnumber1');
            $table->text('r1_country1');
            $table->text('r1_state1');
            $table->text('r1_sectorandhousenumber1');
            $table->text('registering_verify_question1');
            $table->text('registering_verify_answer1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
