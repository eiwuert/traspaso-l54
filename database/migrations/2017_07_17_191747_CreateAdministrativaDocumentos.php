<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativaDocumentos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administrativa_documentos', function($table) {
			$table->increments('id');
			$table->string('nombre_documento');
			$table->date('fecha_ingreso');
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
		Schema::drop('administrativa_documentos');
	}

}
