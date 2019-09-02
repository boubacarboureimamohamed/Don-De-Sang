<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonneursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donneurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('num_donneur')->unique()->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naiss');
            $table->string('lieu_naiss');
            $table->string('sexe');
            $table->string('adresse');
            $table->string('nationalite');
            $table->string('profession');
            $table->integer('telephone');
            $table->string('email')->unique();
            $table->bigInteger('typedonneur_id')->unsigned()->index();
            $table->foreign('typedonneur_id')->references('id')->on('typedonneurs');
            $table->bigInteger('organisation_id')->unsigned()->index()->nullable();
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
        Schema::dropIfExists('donneurs');
    }
}
