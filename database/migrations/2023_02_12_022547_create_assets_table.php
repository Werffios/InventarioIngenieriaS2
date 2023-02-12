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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('placa').notNullValue().unique();
            $table->boolean('maintenance')->default(true);
            $table->string('maintenance_frequency');
            $table->unsignedBigInteger('id_category').nullable();
            $table->unsignedBigInteger('id_brand').nullable();
            $table->unsignedBigInteger('id_model').nullable();
            $table->unsignedBigInteger('id_department').nullable();
            $table->unsignedBigInteger('id_status').nullable();
            $table->unsignedBigInteger('id_location').nullable();
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_brand')->references('id')->on('brands');
            $table->foreign('id_model')->references('id')->on('models');
            $table->foreign('id_department')->references('id')->on('departments');
            $table->foreign('id_status')->references('id')->on('statuses');
            $table->foreign('id_location')->references('id')->on('locations');
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
        Schema::dropIfExists('assets');
    }
};
