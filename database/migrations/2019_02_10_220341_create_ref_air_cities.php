<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefAirCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_air_cities', function (Blueprint $table) {
            $table->increments('air_city_id');
            $table->string('air_city_code',3);
            $table->string('air_city_name_ru',255);
            $table->string('air_city_name_en',255);
            $table->string('air_city_longitude',32);
            $table->string('air_city_latitude',32);
            $table->string('air_city_country_code',2);
            $table->timestamps();

            $table->engine('MyISAM');
            $table->charset('utf8mb4');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_air_cities');
    }
}
