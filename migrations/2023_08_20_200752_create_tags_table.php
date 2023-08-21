<?php

class CreateTagoviTable extends Migration
{
    public function up()
    {
        Schema::create('tagovi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naziv');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tagovi');
    }
}
