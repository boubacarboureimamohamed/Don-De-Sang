<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSituationMatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situation_mats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('situation_matrimoniale');
            $table->timestamps();
        });

        Schema::create('situation_mat_donneur', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->bigInteger('situation_mat_id')->unsigned()->index();
            $table->foreign('situation_mat_id')->references('id')->on('situation_mats')->onDelete('cascade');
            $table->bigInteger('donneur_id')->unsigned()->index();
            $table->foreign('donneur_id')->references('id')->on('donneurs')->onDelete('cascade');
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
        Schema::dropIfExists('situation_mats');
    }
}
