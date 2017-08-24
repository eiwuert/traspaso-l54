<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalRequerimientosRespuestas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('legal_requerimientos_respuestas', function($table) {
			$table->increments('id');
			$table->string('institucion');
			$table->string('identificacion_documento');
			$table->date('fecha_documento');
			$table->string('materia');
			$table->string('estado');
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
		Schema::drop('legal_requerimientos_respuestas');
	}

}
