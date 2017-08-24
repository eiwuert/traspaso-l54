<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up ()
	{
		Schema::create('gestion', function ($table) 
		{
			$table->increments('id');

			$table->string('enlace_marco_normativo')->nullable();
			$table->string('enlace_definiciones_estrategicas')->nullable();
			$table->string('enlace_estructura_organica')->nullable();
			$table->string('enlace_compromisos_gestion')->nullable();

            $table->enum('estado', array('borrador', 'publicado'))->default('borrador');

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
		Schema::drop('gestion');
	}

}
