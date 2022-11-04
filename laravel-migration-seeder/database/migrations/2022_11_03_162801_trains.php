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
            $table->id();
            $table->string('company',100);
            $table->string('departure_station',20);
            $table->string('arrival_station',20);
            $table->time('departure_time',20);
            $table->time('arrival_time',20);
            $table->date('departure_date',20);
            $table->date('arrival_date',20);
            $table->string('code_train',20)->unique();
            $table->tinyInteger('number_vagon')->unsigned()->default(0);
            $table->boolean('in_time')->default(true);
            $table->tinyInteger('cancelled')->default(0);
            $table->timestamps();
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
