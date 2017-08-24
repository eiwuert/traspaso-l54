<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancieraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up ()
	{
		Schema::create('financiera', function ($table) 
		{
			$table->increments('id');
			$table->string('enlace_informe_contabilidad')->nullable();

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
		Schema::drop('financiera');
	}

}
