<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpperlimitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upperlimits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('manufacture');
            $table->Integer('marketing');
            $table->Integer('development');
            $table->Integer('finance');
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
        Schema::dropIfExists('upperlimits');
    }
}
