<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioContratos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventario_contratos', function($table) {
			$table->increments('id');
			$table->enum('clasificacion_contratos', array('mantencion-bienes-muebles','mantencion-vehiculos','reparacion-inmuebles','seguridad','aseo','informatica','otros'));
			$table->integer('numero_contratos');
			$table->integer('monto_mensual');
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
		Schema::drop('inventario_contratos');
	}

}
