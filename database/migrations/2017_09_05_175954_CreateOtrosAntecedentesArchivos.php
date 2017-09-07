<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtrosAntecedentesArchivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otros_antecedentes_archivos', function($table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->integer('acta_id')->unsigned();
            $table->foreign('acta_id')->references('id')->on('actas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('otros_antecedentes_archivos');
    }
}
