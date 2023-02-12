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
        Schema::create('maintenance__histories', function (Blueprint $table) {
            $table->id();
            $table->string('id_asset').notNullValue();
            $table->dateTime('maintenance_date').notNullValue();
            $table->string('observation').notNullValue();
            $table->foreign('id_asset')->references('id')->on('assets');

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
        Schema::dropIfExists('maintenance__histories');
    }
};
