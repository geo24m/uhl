<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('genre');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('country_of_birth');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->string('current_cycle');
            $table->string('current_level');
            $table->string('last_degree');
            $table->string('etablissement');
            $table->string('cycle');
            $table->string('level');
            $table->string('formation');
            $table->text('motivation');
            $table->string('image');
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
        Schema::dropIfExists('admissions');
    }
}
