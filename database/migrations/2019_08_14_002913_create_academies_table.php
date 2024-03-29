<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academies', function (Blueprint $table) {
            /** data */
            $table->increments('id');
            $table->unsignedInteger('teacher');
            $table->string('social_name')->unique()->nullable(true);
            $table->string('name');
            $table->string('academy_document')->unique()->nullable(true);
            $table->string('email')->unique();
            $table->string('telephone')->nullable();

            /** address */
            $table->string('zipcode')->nullable();
            $table->string('street')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();

            $table->unsignedInteger('status')->default(2);
            $table->timestamps();

            $table->foreign('teacher')->references('id')->on('teachers');
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
        Schema::dropIfExists('academies');
    }
}
