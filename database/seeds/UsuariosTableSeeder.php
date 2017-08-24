<?php

use Illuminate\Database\Seeder;
use App\Models\Institucion;
class UsuariosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('usuarios')->delete();
        
		\DB::table('usuarios')->insert(array (
			0 => 
			array (
				'nombres' => 'Prueba',
				'apellidos' => 'Prueba',
				'rut' => '11111111',
				'correo' => 'prueba@prueba.com',
				'institucion_id' => Institucion::first()->id,
				'perfil' => 'root'

			)
		));
	}

}