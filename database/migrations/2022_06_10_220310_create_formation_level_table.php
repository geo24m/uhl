<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_level', function (Blueprint $table) {
            $table->id();
            $table->integer('formation_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->timestamps();

            $table->foreign('formation_id')->references('id')->on('formations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formation_level');
    }
}
