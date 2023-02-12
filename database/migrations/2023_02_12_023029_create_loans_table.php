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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('id_asset').notNullValue();
            $table->string('id_loan_person').notNullValue();
            $table->dateTime('loan_date').notNullValue();
            $table->dateTime('return_date').notNullValue();
            $table->text('observation');
            $table->foreign('id_asset')->references('id')->on('assets');
            $table->foreign('id_loan_person')->references('id')->on('people');
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
        Schema::dropIfExists('loans');
    }
};
