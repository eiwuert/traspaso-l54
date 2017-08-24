<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateGestion19072017 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gestion', function($table)
		{
			$table->string('enlace_ejecucion_presupuestaria')->after('enlace_compromisos_gestion')->nullable();
			$table->text('balance_logros')->after('enlace_ejecucion_presupuestaria')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gestion', function($table)
		{
			$table->dropColumn('enlace_ejecucion_presupuestaria');
			$table->dropColumn('balance_logros');
		});
	}

}
