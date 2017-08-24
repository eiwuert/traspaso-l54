<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancieraInternosRendir extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('financiera_internos_rendir', function($table) {
			$table->increments('id');
			$table->string('fondo_interno');
			$table->string('monto_autorizado');
			$table->string('monto_gastado');
			$table->text('detalle_gastado');
			$table->text('observaciones');
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
		Schema::drop('financiera_internos_rendir');
	}

}
