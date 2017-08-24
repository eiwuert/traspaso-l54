<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipacionCiudadanaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participacion_ciudadana', function ($table) 
		{
			$table->increments('id');
			$table->string('enlace_participacion_ciudadana')->nullable();

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
		Schema::drop('participacion_ciudadana');
	}
}
