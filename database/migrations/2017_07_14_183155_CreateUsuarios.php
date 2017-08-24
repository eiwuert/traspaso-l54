<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function($table) {
			$table->increments('id');
			$table->string('rut',32)->unique();
			$table->string('nombres',128);
			$table->string('apellidos',128);
			$table->string('correo',128)->unique();
			$table->integer('institucion_id')->unsigned();
			$table->foreign('institucion_id')->references('id')->on('instituciones')->onDelete('cascade');
			$table->enum('perfil',array('root','superadmin','admin','auditor'));
			$table->string('remember_token',100);
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
		Schema::drop('usuarios');
	}

}
