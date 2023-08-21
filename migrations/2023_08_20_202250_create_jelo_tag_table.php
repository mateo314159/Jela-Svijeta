<?php

class CreateJeloTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('jelo_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('jelo_id');
            $table->foreign('jelo_id')->references('id')->on('jela')->onDelete('cascade');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tagovi')->onDelete('cascade');
            $table->primary(['jelo_id', 'tag_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('jelo_tag');
    }
}
