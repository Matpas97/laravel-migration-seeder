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
            $table->string('start_station',20);
            $table->string('enf_station',20);
            $table->string('start_station',20);
            $table->time();
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
