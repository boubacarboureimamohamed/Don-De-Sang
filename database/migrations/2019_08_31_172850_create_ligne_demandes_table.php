<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLigneDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_demandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantite_demandee');
            $table->bigInteger('demande_id')->unsigned()->index();
            $table->foreign('demande_id')->references('id')->on('demandes');
            $table->bigInteger('groupement_id')->unsigned()->index();
            $table->foreign('groupement_id')->references('id')->on('groupements');
            $table->bigInteger('livraison_id')->unsigned()->index();
            $table->foreign('livraison_id')->references('id')->on('livraisons');
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
        Schema::dropIfExists('ligne_demandes');
    }
}
