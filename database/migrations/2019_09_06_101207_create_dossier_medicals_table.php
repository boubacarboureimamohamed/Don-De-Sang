<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDossierMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_medicals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('poid');
            $table->integer('temperature');
            $table->integer('tension_arterielle');
            $table->date('date_dossier_medical');
            $table->boolean('approbation');
            $table->string('observation_approbation')->nullable();
            $table->string('num_don')->nullable();
            $table->dateTime('date_heure_prelevement')->nullable();
            $table->integer('quantite_prelevee')->nullable();
            $table->string('type_prelevement')->nullable();
            $table->string('type_poche')->nullable();
            $table->string('observation_prelevement')->nullable();
            $table->boolean('rejet')->nullable();
            $table->string('motif_rejet')->nullable();
            $table->bigInteger('donneur_id')->unsigned()->index();
            $table->foreign('donneur_id')->references('id')->on('donneurs');
            $table->bigInteger('groupement_id')->unsigned()->index()->nullable();
            $table->foreign('groupement_id')->references('id')->on('groupements');
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
        Schema::dropIfExists('dossier_medicals');
    }
}
