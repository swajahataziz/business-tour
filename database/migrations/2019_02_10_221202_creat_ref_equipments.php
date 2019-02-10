<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatRefEquipments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_equipments', function (Blueprint $table) {
            $table->increments('equipment_id');
            $table->string('equipment_code',3);
            $table->string('equipment_name',255);
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
        //
    }
}
