<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionCompromisosInternacionalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gestion_compromisos_internacionales', function ($table) 
		{
			$table->increments('id');
			$table->string('nombre');
			$table->enum('calidad_participacion', array('miembro_pleno', 'observador'));

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
		Schema::drop('gestion_compromisos_internacionales');
	}
}
