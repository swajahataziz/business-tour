<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_airlines', function (Blueprint $table) {
            $table->increments('airline_id');
            $table->string('airline_code', 2);
            $table->string('airline_name', 255);
            $table->timestamps();

            $table->engine='MyISAM';
            $table->charset='utf8mb4';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_airlines');
    }
}
