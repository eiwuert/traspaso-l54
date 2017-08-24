<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalJuiciosPendientes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('legal_juicios_pendientes', function($table) {
			$table->increments('id');
			$table->string('materia');
			$table->string('numero_causa');
			$table->integer('anio');
			$table->string('tribunal');
			$table->enum('sede',array('Civil','Penal','Laboral','Competencia común'));
			$table->string('naturaleza');
			$table->string('instancia');
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
		Schema::drop('legal_juicios_pendientes');
	}

}
