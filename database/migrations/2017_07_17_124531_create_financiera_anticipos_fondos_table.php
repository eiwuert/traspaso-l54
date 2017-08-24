<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancieraAnticiposFondosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('financiera_anticipos_fondos', function ($table) 
		{
			$table->increments('id');
			$table->enum('anticipos_concedidos', array('funcionarios', 'proveedores'));
			$table->integer('numero_beneficiarios')->unsigned();
			$table->integer('monto')->unsigned();

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
		Schema::drop('financiera_anticipos_fondos');
	}
}
