<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionLicitaciones extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gestion_licitaciones', function($table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('estado');
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
		Schema::drop('gestion_licitaciones');
	}
}
