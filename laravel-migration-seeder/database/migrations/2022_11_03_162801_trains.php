<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('train',function(Blueprint $table) {
            $table->string('company',20);
            $table->string('departure_station',20);
            $table->string('arrival_station',20);
            $table->string('departure_time',20);
            $table->string('arrival_time',20);
            $table->time();
            $table->int('code_train');
            $table->int('number_vagon');
            $table->int('in_time');
            $table->string('cancelled');
        });
       

        //
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
