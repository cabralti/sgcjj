<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('academy');

            /** personal data */
            $table->string('name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->char('sex', 1)->nullable();
            $table->string('document')->unique();
            $table->string('document_secondary', 20);
            $table->string('cell')->nullable();
            $table->string('email')->unique();

            /** address */
            $table->string('zipcode')->nullable();
            $table->string('street')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();

            /** athlete data */
            $table->string('band')->nullable();

            $table->unsignedInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('academy')->references('id')->on('academies');
            $table->foreign('status')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('athletes');
    }
}
