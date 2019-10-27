<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('academy')->nullable(true);
            $table->unsignedInteger('athlete')->nullable(true);
            $table->unsignedInteger('type_document');
            $table->string('name');
            $table->string('path');
            $table->timestamps();

            $table->foreign('academy')->references('id')->on('academies')->onDelete('cascade');
            $table->foreign('athlete')->references('id')->on('athletes')->onDelete('cascade');
            $table->foreign('type_document')->references('id')->on('type_documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
