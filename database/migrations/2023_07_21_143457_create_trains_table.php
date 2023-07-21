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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 100);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->dateTime('arrival_time');
            $table->dateTime('departure_time');
            $table->smallInteger('code_train',20);
            $table->tinyInteger('train_number_carriage');
            $table->string('in_time', 50);
            $table->boolean('cancelled')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
