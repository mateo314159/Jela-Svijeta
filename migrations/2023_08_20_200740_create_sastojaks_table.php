<?php

class CreateSastojciTable extends Migration
{
    public function up()
    {
        Schema::create('sastojci', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naziv');
            $table->unsignedBigInteger('jelo_id');
            $table->foreign('jelo_id')->references('id')->on('jela');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sastojci');
    }
}
