<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventario_vehiculos', function ($table) 
		{
			$table->increments('id');
			$table->string('identificacion_especie');
			$table->string('patente');
			$table->enum('condicion_juridica', array('propio', 'recibido', 'dado_en_comodato'));
			$table->enum('condicion_fisica', array('bueno', 'regular', 'malo'));
			$table->string('destinacion');

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
		Schema::drop('inventario_vehiculos');
	}
}