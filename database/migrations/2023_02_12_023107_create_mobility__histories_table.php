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
        Schema::create('mobility__histories', function (Blueprint $table) {
            $table->id();
            $table->string('id_asset')->notNullValue();
            $table->string('id_location_origin')->notNullValue();
            $table->string('id_location_destination')->notNullValue();
            $table->string('id_department_origin')->notNullValue();
            $table->string('id_department_destination')->notNullValue();
            $table->string('id_status')->notNullValue();
            $table->dateTime('date')->notNullValue();
            $table->string('observation');
            $table->foreignId('id_asset')->constrained('assets')->onDelete('cascade');
            $table->

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
        Schema::dropIfExists('mobility__histories');
    }
};
