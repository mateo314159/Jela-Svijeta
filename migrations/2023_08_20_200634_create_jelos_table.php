<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJelaTable extends Migration
{
    public function up()
    {
        Schema::create('jela', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naziv');
            $table->text('opis')->nullable();
            $table->unsignedBigInteger('kategorija_id');
            $table->foreign('kategorija_id')->references('id')->on('kategorije');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jela');
    }
}
