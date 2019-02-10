<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefAirports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_airports', function (Blueprint $table) {
            $table->bigIncrements('airport_id');
            $table->string('airport_code',3);
            $table->string('airport_name',255);
            $table->string('airport_country_code',2);
            $table->string('airport_city_code',3);
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
        Schema::dropIfExists('ref_airports');
    }
}
