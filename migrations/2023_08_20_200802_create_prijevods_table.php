<?php

class CreateJeloPrijevodiTable extends Migration
{
    public function up()
    {
        Schema::create('jelo_prijevodi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('jelo_id');
            $table->foreign('jelo_id')->references('id')->on('jela')->onDelete('cascade');
            $table->unsignedBigInteger('jezik_id');
            $table->foreign('jezik_id')->references('id')->on('jezici')->onDelete('cascade');
            $table->string('naziv');
            $table->text('opis')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jelo_prijevodi');
    }
}
