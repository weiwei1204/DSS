<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBsc1stsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bsc_1sts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bsc_id')->unsigned();
            $table->foreign('bsc_id')->references('id')->on('balancedscorecards')->onDelete('cascade');
            $table->Integer('manufacture1');
            $table->Integer('manufacture2');
            $table->Integer('manufacture3');
            $table->Integer('manufacture4');
            $table->Integer('marketing1');
            $table->Integer('marketing2');
            $table->Integer('marketing3');
            $table->Integer('marketing4');
            $table->Integer('development1');
            $table->Integer('development2');
            $table->Integer('development3');
            $table->Integer('development4');
            $table->Integer('finance1');
            $table->Integer('finance2');
            $table->Integer('finance3');
            $table->Integer('finance4');
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
        Schema::dropIfExists('bsc_1sts');
    }
}
