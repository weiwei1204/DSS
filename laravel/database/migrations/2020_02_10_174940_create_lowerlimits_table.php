<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowerlimitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowerlimits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('finance');
            $table->Integer('customer');
            $table->Integer('inprocess');
            $table->Integer('learn_growth');
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
        Schema::dropIfExists('lowerlimits');
    }
}
