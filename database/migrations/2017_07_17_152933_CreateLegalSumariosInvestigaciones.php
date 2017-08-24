<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalSumariosInvestigaciones extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('legal_sumarios_investigaciones', function($table) {
			$table->increments('id');
			$table->enum('tipo', array('Sumario','Investigación'));
			$table->string('numero_resolucion');
			$table->date('fecha_resolucion');
			$table->string('estado_proceso');
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
		Schema::drop('legal_sumarios_investigaciones');
	}

}
