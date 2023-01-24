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
            $table->timestamps();
            $table->string("agency");
            $table->string("departure_station");
            $table->string("arrival_station");
            $table->string("departure_time");
            $table->string("arrival_station");
            $table->string("train_code");
            $table->string("train_code")->unique();
            $table->int("number of carriages");
            $table->boolean("on_time");
            $table->boolean("cancelled");
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