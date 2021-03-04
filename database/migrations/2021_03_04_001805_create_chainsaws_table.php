<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChainsawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chainsaws', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->Integer('weight');
            $table->string('chainType');
            $table->Integer('power');
            $table->string('tankCapacity');
            $table->string('speed');
            $table->string('typeFuel');
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
        Schema::dropIfExists('chainsaws');
    }
}
