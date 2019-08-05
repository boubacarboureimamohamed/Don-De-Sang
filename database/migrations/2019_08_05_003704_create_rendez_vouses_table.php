<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRendezVousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_heure');
            $table->string('lieu');
            $table->bigInteger('type_rendez_vouse_id')->unsigned()->index();
            $table->foreign('type_rendez_vouse_id')->references('id')->on('type_rendez_vouses');
            $table->bigInteger('organisation_id')->unsigned()->index();
            $table->foreign('organisation_id')->references('id')->on('organisations');
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
        Schema::dropIfExists('rendez_vouses');
    }
}
