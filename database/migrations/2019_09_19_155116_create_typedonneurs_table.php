<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypedonneursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typedonneurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_donneur');
            $table->timestamps();
        });

        Schema::create('typedonneur_donneur', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->bigInteger('typedonneur_id')->unsigned()->index();
            $table->foreign('typedonneur_id')->references('id')->on('typedonneurs')->onDelete('cascade');
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
        Schema::dropIfExists('typedonneurs');
    }
}
