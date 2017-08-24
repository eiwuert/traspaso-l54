<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosLogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios_logs', function($table) {
			$table->increments('id');
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
			$table->integer('objeto_id');
			$table->string('nombre_objeto',128);
			$table->string('accion',64);
			$table->text('antes')->nullable();
			$table->text('despues')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios_logs');
	}

}
