<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtrosAntecedentes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('otros_antecedentes', function($table) {
			$table->increments('id');
			$table->string('archivo_otros_antecedentes',128);
			$table->text('archivo_descripcion');
            $table->enum('estado', array('borrador', 'publicado'))->default('borrador');
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
		Schema::drop('otros_antecedentes');
	}

}
