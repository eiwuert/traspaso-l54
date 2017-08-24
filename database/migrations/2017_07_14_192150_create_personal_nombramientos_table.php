<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalNombramientosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal_nombramientos', function ($table) 
		{
			$table->increments('id');
			$table->enum('tipo', array('directivos','profesionales','tecnicos','administrativos','auxiliares','cargos-vacantes'));
			$table->integer('total_proceso_promocion')->unsigned();
			$table->integer('total_proceso_nombramiento')->unsigned();

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
		Schema::drop('personal_nombramientos');
	}
}
