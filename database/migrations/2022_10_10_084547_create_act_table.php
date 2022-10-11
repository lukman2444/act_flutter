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
        Schema::create('act', function (Blueprint $table) {
            $table->bigIncrements('id_act');
            $table->string('nik');
            $table->string('fullname');
            $table->string('subdivisi');
            $table->string('location');
            $table->string('target');
            $table->string('date_visit');
            $table->string('stk_numbers');
            $table->string('data_gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('act');
    }
};
