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
            $table->string("agency")->nullable();
            $table->string("departure_station")->nullable();
            $table->string("arrival_station")->nullable();
            $table->string("departure_time")->nullable();
            $table->string("arrival_time")->nullable();
            $table->string("train_code")->unique();
            $table->string("number of carriages")->nullable();
            $table->boolean("on_time")->nullable();
            $table->boolean("cancelled")->nullable();
        });
    }

            


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dropColumn("agency");
            $table->dropColumn("departure_station");
            $table->dropColumn("arrival_station");
            $table->dropColumn("departure_time");
            $table->dropColumn("arrival_station");
            $table->dropColumn("train_code")->unique();
            $table->dropColumn("number of carriages");
            $table->dropColumn("on_time");
            $table->dropColumn("cancelled");
        });
    }
};