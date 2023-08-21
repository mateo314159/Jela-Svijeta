<?php

class CreateJeziciTable extends Migration
{
    public function up()
    {
        Schema::create('jezici', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naziv');
            $table->string('kod'); // npr. "en", "hr", "de", itd.
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jezici');
    }
}
