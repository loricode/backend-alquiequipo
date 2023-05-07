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
        Schema::create('alquilados', function (Blueprint $table) {
            $table->id();
            $table->uuid('alqCodeEquipo');
            $table->dateTime('alqStartDate', $precision = 0);
            $table->dateTime('alqFinalDate', $precision = 0);
            $table->integer('alqQuantity');
            $table->boolean('alqStatus');
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
        Schema::dropIfExists('alquilados');
    }
};
