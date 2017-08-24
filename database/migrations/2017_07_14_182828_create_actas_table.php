<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up ()
	{
		Schema::create('actas', function ($table) 
		{
			$table->increments('id');

            $table->enum('estado', array('borrador', 'publicado'))->default('borrador');

			$table->integer('institucion_id')->unsigned();
			$table->foreign('institucion_id')->references('id')->on('instituciones');

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
		Schema::drop('actas');
	}

}
