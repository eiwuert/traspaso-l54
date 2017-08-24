<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancieraConciliacionesBancariasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('financiera_conciliaciones_bancarias', function ($table) 
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('numero_cuenta_corriente');
			$table->integer('saldo_contable')->unsigned();
			$table->integer('saldo_banco_cartola')->unsigned();
			$table->integer('depositos_no_registrados')->unsigned();
			$table->integer('giros_no_registrados')->unsigned();
			$table->integer('saldo_banco_contable')->unsigned();

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
		Schema::drop('financiera_conciliaciones_bancarias');
	}
}
