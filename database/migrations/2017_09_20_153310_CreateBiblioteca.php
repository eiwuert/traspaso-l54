<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiblioteca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biblioteca', function($table) {
            $table->increments('id');
            $table->boolean('entrega')->nullable();
            $table->enum('estado', array('borrador', 'publicado'))->default('borrador');
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
        Schema::drop('biblioteca');
    }
}
