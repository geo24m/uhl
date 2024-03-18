<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenterFormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('center_formation', function (Blueprint $table) {
            $table->id();
            $table->integer('formation_id')->unsigned();
            $table->integer('center_id')->unsigned();
            $table->timestamps();

            $table->foreign('formation_id')->references('id')->on('formations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('center_id')->references('id')->on('centers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('center_formation');
    }
}
