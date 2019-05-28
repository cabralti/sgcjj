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
            $table->string('social_name')->unique();
            $table->string('name');
            $table->string('document')->unique();
            $table->string('email')->unique();
            $table->string('telephone')->nullable();

            /** address */
            $table->string('zipcode')->nullable();
            $table->string('street')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();

            /** teacher */
            $table->string('teacher_name')->nullable();
            $table->string('teacher_band')->nullable();
            $table->string('teacher_document')->nullable();
            $table->string('teacher_document_secondary', 20)->nullable();
            $table->string('teacher_cell')->nullable();
            $table->string('teacher_email')->nullable();

            $table->boolean('status')->nullable()->default(0);
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
        Schema::dropIfExists('academies');
    }
}
