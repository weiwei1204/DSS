<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrategiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('strategies', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('resource_id')->unsigned();
             $table->foreign('resource_id')->references('id')->on('resources')->onDelete('cascade');
             $table->Integer('innovation');
             $table->Integer('m_development');
             $table->Integer('p_development');
             $table->Integer('backward');
             $table->Integer('forkward');
             $table->Integer('diversification');
 
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
        Schema::dropIfExists('strategies');
    }
}
