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
        Schema::create('register_for_human', function (Blueprint $table) {
            $table->increments('id');
            $table->text('r1_name1');
            $table->text('r1_contactnumber1');
            $table->text('r1_country1');
            $table->text('r1_state1');
            $table->text('r1_sectorandhousenumber1');
            $table->text('r1_image');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
            
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
