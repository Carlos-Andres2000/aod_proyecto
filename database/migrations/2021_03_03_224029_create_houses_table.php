<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('home');
            $table->string('color');
            $table->tinyInteger('numDoors');
            $table->tinyInteger('numWindows');
            $table->tinyInteger('numFocus');
            $table->tinyInteger('numFloor');
            $table->Integer('width');
            $table->Integer('length');
            $table->Integer('height');
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
        Schema::dropIfExists('houses');
    }
}
