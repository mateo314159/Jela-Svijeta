<?php

class CreateKategorijeTable extends Migration
{
    public function up()
    {
        Schema::create('kategorije', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naziv');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategorije');
    }
}
