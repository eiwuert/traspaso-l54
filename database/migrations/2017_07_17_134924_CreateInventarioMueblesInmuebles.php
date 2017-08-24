<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioMueblesInmuebles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventario_muebles_inmuebles', function($table) {
			$table->increments('id');
			$table->enum('tipo_activo', array('bienes-inmuebles','mobiliario-y-otros','maquinas-y-equipos','vehiculos','equipos-informaticos','programas-informaticos'));
			$table->integer('unidades');
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
		Schema::drop('inventario_muebles_inmuebles');
	}

}
