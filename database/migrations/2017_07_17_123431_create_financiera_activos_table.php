<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancieraActivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('financiera_activos', function ($table) 
		{
			$table->increments('id');
			$table->enum('nombre', array('por_cobrar', 'inversion_financiera', 'otro'));
			$table->text('detalle');
			$table->integer('monto')->unsigned();
			$table->date('plazo')->nullable();

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
		Schema::drop('financiera_activos');
	}
}
