<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historisations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->bigInteger('donneur_id')->unsigned()->index();
            $table->foreign('donneur_id')->references('id')->on('donneurs');
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
        Schema::dropIfExists('historisations');
    }
}
