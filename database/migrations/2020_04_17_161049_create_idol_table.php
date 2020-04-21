<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idol', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_r');
            $table->string('name_y');
            $table->string('cv');
            $table->string('type');
            $table->date('birthdate');
            $table->integer('age');
            $table->integer('age_string')->nullable();
            $table->integer('height');
            $table->integer('weight');
            $table->string('weight_string');
            $table->string('bust');
            $table->string('waist');
            $table->string('hip');
            $table->string('constellation');
            $table->string('bloodtype');
            $table->string('handedness');
            $table->string('birthplace');
            $table->string('hobby');
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
        Schema::dropIfExists('idol');
    }
}
