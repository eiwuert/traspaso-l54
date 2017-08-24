<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalProyectosLeyTramitacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('legal_proyectos_ley_tramitacion', function ($table) 
		{
			$table->increments('id');
			$table->string('nombre');
			$table->date('fecha_ingreso')->nullable();
			$table->string('estado');

			$table->integer('acta_id')->unsigned();
			$table->foreign('acta_id')->references('id')->on('actas')->onDelete('cascade');

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down ()
	{
		Schema::drop('legal_proyectos_ley_tramitacion');
	}
}
