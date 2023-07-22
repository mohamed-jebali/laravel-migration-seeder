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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('aircraft_name', 100);
            $table->string('departure_airport', 100);
            $table->string('arrival_airport', 100);
            $table->string('terminal', 100);
            $table->boolean('delay');
            $table->boolean('check_in');
            $table->smallInteger('flight_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
