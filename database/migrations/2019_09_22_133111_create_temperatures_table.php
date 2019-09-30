<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemperaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('temperatures', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('plant_id');
            $table->foreign('plant_id')->references('id')->on('plants');
            $table->unsignedInteger('sensor_id');
            $table->foreign('sensor_id')->references('id')->on('sensors');
            $table->decimal('temperature', 8, 2);
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
        Schema::dropIfExists('temperatures');
    }
}
