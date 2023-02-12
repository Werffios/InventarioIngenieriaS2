<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigment__histories', function (Blueprint $table) {
            $table->id();
            $table->string('id_asset').notNullValue();
            $table->string('id_department').notNullValue();
            $table->string('id_location').notNullValue();
            $table->string('id_responsible').notNullValue();
            $table->dateTime('assigment_date').notNullValue();
            $table->foreign('id_asset')->references('id')->on('assets');
            $table->foreign('id_department')->references('id')->on('departments');
            $table->foreign('id_location')->references('id')->on('locations');
            $table->foreign('id_responsible')->references('id')->on('responsibles');
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
        Schema::dropIfExists('assigment__histories');
    }
};
