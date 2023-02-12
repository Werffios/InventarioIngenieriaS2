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
        Schema::create('notification__loan__histories', function (Blueprint $table) {
            $table->id();
            $table->string('id_person').notNullValue();
            $table->string('id_loan').notNullValue();
            $table->dateTime('notification_date').notNullValue();
            $table->foreign('id_person')->references('id')->on('people');
            $table->foreign('id_loan')->references('id')->on('loans');
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
        Schema::dropIfExists('notification__loan__histories');
    }
};
