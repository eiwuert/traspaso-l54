<?php

use Illuminate\Database\Seeder;

class InstitucionesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('instituciones')->delete();
        
		\DB::table('instituciones')->insert(array (
			0 => 
			array (
				'codigo' => 'AA001',
				'nombre' => 'Presidencia de la República',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'codigo' => 'AB001',
				'nombre' => 'Subsecretaría del Interior',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'codigo' => 'AB002',
				'nombre' => 'Subsecretaría de Desarrollo Regional',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'codigo' => 'AB003',
				'nombre' => 'Agencia Nacional de Inteligencia',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'codigo' => 'AB004',
				'nombre' => 'Oficina Nacional de Emergencia',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			5 => 
			array (
				'codigo' => 'AB005',
				'nombre' => 'Servicio de Gobierno Interior',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			6 => 
			array (
				'codigo' => 'AB006',
				'nombre' => 'Servicio Electoral',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			7 => 
			array (
				'codigo' => 'AB007',
				'nombre' => 'Intendencia Arica y Parinacota',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			8 => 
			array (
				'codigo' => 'AB008',
				'nombre' => 'Intendencia de Antofagasta',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			9 => 
			array (
				'codigo' => 'AB009',
				'nombre' => 'Intendencia de Atacama',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			10 => 
			array (
				'codigo' => 'AB010',
				'nombre' => 'Intendencia de Aysén',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			11 => 
			array (
				'codigo' => 'AB011',
				'nombre' => 'Intendencia de Coquimbo',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			12 => 
			array (
				'codigo' => 'AB012',
				'nombre' => 'Intendencia de la Araucanía',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			13 => 
			array (
				'codigo' => 'AB013',
				'nombre' => 'Intendencia de Los Lagos',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			14 => 
			array (
				'codigo' => 'AB014',
				'nombre' => 'Intendencia de Los Ríos',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			15 => 
			array (
				'codigo' => 'AB015',
				'nombre' => 'Intendencia de Magallanes',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			16 => 
			array (
				'codigo' => 'AB016',
				'nombre' => 'Intendencia de O’Higgins',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			17 => 
			array (
				'codigo' => 'AB017',
				'nombre' => 'Intendencia de Tarapacá',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			18 => 
			array (
				'codigo' => 'AB018',
				'nombre' => 'Intendencia de Valparaíso',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			19 => 
			array (
				'codigo' => 'AB019',
				'nombre' => 'Intendencia del Bío Bío',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			20 => 
			array (
				'codigo' => 'AB020',
				'nombre' => 'Intendencia del Maule',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			21 => 
			array (
				'codigo' => 'AB021',
				'nombre' => 'Intendencia Metropolitana',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			22 => 
			array (
				'codigo' => 'AB022',
				'nombre' => 'Gobernación de Arica',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			23 => 
			array (
				'codigo' => 'AB023',
				'nombre' => 'Gobernación de Parinacota',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			24 => 
			array (
				'codigo' => 'AB024',
				'nombre' => 'Gobernación de Iquique',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			25 => 
			array (
				'codigo' => 'AB025',
				'nombre' => 'Gobernación de Tamarugal',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			26 => 
			array (
				'codigo' => 'AB026',
				'nombre' => 'Gobernación de Antofagasta',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			27 => 
			array (
				'codigo' => 'AB027',
				'nombre' => 'Gobernación de El Loa',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			28 => 
			array (
				'codigo' => 'AB028',
				'nombre' => 'Gobernación de Tocopilla',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			29 => 
			array (
				'codigo' => 'AB029',
				'nombre' => 'Gobernación de Chañaral',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			30 => 
			array (
				'codigo' => 'AB030',
				'nombre' => 'Gobernación de Copiapó',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			31 => 
			array (
				'codigo' => 'AB031',
				'nombre' => 'Gobernación de Huasco',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			32 => 
			array (
				'codigo' => 'AB032',
				'nombre' => 'Gobernación de Elqui',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			33 => 
			array (
				'codigo' => 'AB033',
				'nombre' => 'Gobernación de Limarí',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			34 => 
			array (
				'codigo' => 'AB034',
				'nombre' => 'Gobernación de Choapa',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			35 => 
			array (
				'codigo' => 'AB035',
				'nombre' => 'Gobernación de Petorca',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			36 => 
			array (
				'codigo' => 'AB036',
				'nombre' => 'Gobernación de Valparaíso',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			37 => 
			array (
				'codigo' => 'AB037',
				'nombre' => 'Gobernación de San Felipe',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			38 => 
			array (
				'codigo' => 'AB038',
				'nombre' => 'Gobernación de Los Andes',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			39 => 
			array (
				'codigo' => 'AB039',
				'nombre' => 'Gobernación de Quillota',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			40 => 
			array (
				'codigo' => 'AB040',
				'nombre' => 'Gobernación de San Antonio',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			41 => 
			array (
				'codigo' => 'AB041',
				'nombre' => 'Gobernación de Isla de Pascua',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			42 => 
			array (
				'codigo' => 'AB042',
				'nombre' => 'Gobernación de Cachapoal',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			43 => 
			array (
				'codigo' => 'AB043',
				'nombre' => 'Gobernación de Colchagua',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			44 => 
			array (
				'codigo' => 'AB044',
				'nombre' => 'Gobernación de Cardenal Caro',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			45 => 
			array (
				'codigo' => 'AB045',
				'nombre' => 'Gobernación de Curicó',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			46 => 
			array (
				'codigo' => 'AB046',
				'nombre' => 'Gobernación de Talca',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			47 => 
			array (
				'codigo' => 'AB047',
				'nombre' => 'Gobernación de Linares',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			48 => 
			array (
				'codigo' => 'AB048',
				'nombre' => 'Gobernación de Cauquenes',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			49 => 
			array (
				'codigo' => 'AB049',
				'nombre' => 'Gobernación de Ñuble',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			50 => 
			array (
				'codigo' => 'AB050',
				'nombre' => 'Gobernación de Bío Bío',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			)
			/*,
			51 => 
			array (
				'codigo' => 'AB051',
				'nombre' => 'Gobernación de Concepción',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			52 => 
			array (
				'codigo' => 'AB052',
				'nombre' => 'Gobernación de Arauco',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			53 => 
			array (
				'codigo' => 'AB053',
				'nombre' => 'Gobernación de Malleco',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			54 => 
			array (
				'codigo' => 'AB054',
				'nombre' => 'Gobernación de Cautín',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			55 => 
			array (
				'codigo' => 'AB055',
				'nombre' => 'Gobernación de Valdivia',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			56 => 
			array (
				'codigo' => 'AB056',
				'nombre' => 'Gobernación de Ranco',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			57 => 
			array (
				'codigo' => 'AB057',
				'nombre' => 'Gobernación de Osorno',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			58 => 
			array (
				'codigo' => 'AB058',
				'nombre' => 'Gobernación de Llanquihue',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			59 => 
			array (
				'codigo' => 'AB059',
				'nombre' => 'Gobernación de Chiloé',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			60 => 
			array (
				'codigo' => 'AB060',
				'nombre' => 'Gobernación de Palena',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			61 => 
			array (
				'codigo' => 'AB061',
				'nombre' => 'Gobernación de Coyhaique',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			62 => 
			array (
				'codigo' => 'AB062',
				'nombre' => 'Gobernación de Puerto Aysén',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			63 => 
			array (
				'codigo' => 'AB063',
				'nombre' => 'Gobernación de General Carrera',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			64 => 
			array (
				'codigo' => 'AB064',
				'nombre' => 'Gobernación de Capitán Prat',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			65 => 
			array (
				'codigo' => 'AB065',
				'nombre' => 'Gobernación de Última Esperanza',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			66 => 
			array (
				'codigo' => 'AB066',
				'nombre' => 'Gobernación de Magallanes',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			67 => 
			array (
				'codigo' => 'AB067',
				'nombre' => 'Gobernación de Tierra del Fuego',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			68 => 
			array (
				'codigo' => 'AB068',
				'nombre' => 'Gobernación de la Antártica Chilena',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			69 => 
			array (
				'codigo' => 'AB069',
				'nombre' => 'Gobernación de Chacabuco',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			70 => 
			array (
				'codigo' => 'AB070',
				'nombre' => 'Gobernación de Cordillera',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			71 => 
			array (
				'codigo' => 'AB071',
				'nombre' => 'Gobernación de Maipo',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			72 => 
			array (
				'codigo' => 'AB072',
				'nombre' => 'Gobernación de Talagante',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			73 => 
			array (
				'codigo' => 'AB073',
				'nombre' => 'Gobernación de Melipilla',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			74 => 
			array (
				'codigo' => 'AB075',
				'nombre' => 'Gobierno Regional de Arica y Parinacota',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			75 => 
			array (
				'codigo' => 'AB076',
				'nombre' => 'Gobierno Regional de Tarapacá',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			76 => 
			array (
				'codigo' => 'AB077',
				'nombre' => 'Gobierno Regional de Antofagasta',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			77 => 
			array (
				'codigo' => 'AB078',
				'nombre' => 'Gobierno Regional de Atacama',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			78 => 
			array (
				'codigo' => 'AB079',
				'nombre' => 'Gobierno Regional de Coquimbo',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			79 => 
			array (
				'codigo' => 'AB080',
				'nombre' => 'Gobierno Regional de Valparaíso',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			80 => 
			array (
				'codigo' => 'AB081',
				'nombre' => 'Gobierno Regional Metropolitano de Santiago',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			)/*
			83 => 
			array (
				'codigo' => 'AB082',

				'nombre' => 'Gobierno Regional de O´Higgins',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			84 => 
			array (
				'codigo' => 'AB083',

				'nombre' => 'Gobierno Regional del Maule',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			85 => 
			array (
				'codigo' => 'AB084',

				'nombre' => 'Gobierno Regional del Bío Bío',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			86 => 
			array (
				'codigo' => 'AB085',

				'nombre' => 'Gobierno Regional de La Araucanía',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			87 => 
			array (
				'codigo' => 'AB086',

				'nombre' => 'Gobierno Regional de Los Ríos',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			88 => 
			array (
				'codigo' => 'AB087',

				'nombre' => 'Gobierno Regional de Los Lagos',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			89 => 
			array (
				'codigo' => 'AB088',

				'nombre' => 'Gobierno Regional de Aysén',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			90 => 
			array (
				'codigo' => 'AB089',

				'nombre' => 'Gobierno Regional de Magallanes y Antártica Chilena ',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			91 => 
			array (
				'codigo' => 'AB090',

				'nombre' => 'Gobernación de Marga Marga',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			92 => 
			array (
				'codigo' => 'AB091',

				'nombre' => 'Subsecretaría de Prevención del Delito',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			93 => 
			array (
				'codigo' => 'AB092',

				'nombre' => 'Servicio Nacional de Prevención y Rehabilitación del Consumo de Drogas y Alcohol',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			94 => 
			array (
				'codigo' => 'AB999',

				'nombre' => 'Departamento de Extranjería y Migración',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			96 => 
			array (
				'codigo' => 'AC001',

				'nombre' => 'Subsecretaría de Relaciones Exteriores',
				'codigo_padre' => 'AC',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			97 => 
			array (
				'codigo' => 'AC002',

				'nombre' => 'Dirección General de Relaciones Económicas Internacionales',
				'codigo_padre' => 'AC',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			98 => 
			array (
				'codigo' => 'AC003',

				'nombre' => 'Dirección Nacional de Fronteras y Límites del Estado',
				'codigo_padre' => 'AC',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			99 => 
			array (
				'codigo' => 'AC004',

				'nombre' => 'Agencia de Cooperación Internacional',
				'codigo_padre' => 'AC',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			100 => 
			array (
				'codigo' => 'AC005',

				'nombre' => 'Instituto Antártico Chileno',
				'codigo_padre' => 'AC',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),

			102 => 
			array (
				'codigo' => 'AD006',

				'nombre' => 'Ejército de Chile',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			103 => 
			array (
				'codigo' => 'AD007',

				'nombre' => 'Armada de Chile',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			104 => 
			array (
				'codigo' => 'AD008',

				'nombre' => 'Fuerza Aérea de Chile',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			105 => 
			array (
				'codigo' => 'AD009',

				'nombre' => 'Carabineros de Chile',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			106 => 
			array (
				'codigo' => 'AD010',

				'nombre' => 'Policía de Investigaciones',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			107 => 
			array (
				'codigo' => 'AD011',

				'nombre' => 'Dirección Administrativa',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			108 => 
			array (
				'codigo' => 'AD012',

				'nombre' => 'Defensa Civil de Chile',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			109 => 
			array (
				'codigo' => 'AD013',

				'nombre' => 'Dirección General de Movilización Nacional',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			110 => 
			array (
				'codigo' => 'AD014',

				'nombre' => 'Dirección General del Territorio Marítimo y Marina Mercante',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			111 => 
			array (
				'codigo' => 'AD015',

				'nombre' => 'Caja de Previsión de la Defensa Nacional',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			112 => 
			array (
				'codigo' => 'AD016',

				'nombre' => 'Dirección de Previsión de Carabineros de Chile',
				'codigo_padre' => 'AB',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			113 => 
			array (
				'codigo' => 'AD017',

				'nombre' => 'Instituto Geográfico Militar',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			114 => 
			array (
				'codigo' => 'AD018',

				'nombre' => 'Servicio Aerofotogramétrico FACh',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			115 => 
			array (
				'codigo' => 'AD019',

				'nombre' => 'Servicio Hidrográfico y Oceanográfico de la Armada',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			116 => 
			array (
				'codigo' => 'AD020',

				'nombre' => 'Dirección General de Aeronáutica Civil',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			117 => 
			array (
				'codigo' => 'AD021',

				'nombre' => 'Subsecretaría de Defensa',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			118 => 
			array (
				'codigo' => 'AD022',

				'nombre' => 'Subsecretaría para las Fuerzas Armadas',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			119 => 
			array (
				'codigo' => 'AD023',

				'nombre' => 'Estado Mayor Conjunto ',
				'codigo_padre' => 'AD',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),

			121 => 
			array (
				'codigo' => 'AE001',

				'nombre' => 'Subsecretaría de Hacienda ',
				'codigo_padre' => 'AE',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			122 => 
			array (
				'codigo' => 'AE002',

				'nombre' => 'Dirección de Presupuestos',
				'codigo_padre' => 'AE',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			123 => 
			array (
				'codigo' => 'AE003',

				'nombre' => 'Tesorería General de la República',
				'codigo_padre' => 'AE',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			124 => 
			array (
				'codigo' => 'AE004',

				'nombre' => 'Dirección Nacional del Servicio Civil',
				'codigo_padre' => 'AE',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			125 => 
			array (
				'codigo' => 'AE005',

				'nombre' => 'Unidad de Análisis Financiero',
				'codigo_padre' => 'AE',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			126 => 
			array (
				'codigo' => 'AE006',

				'nombre' => 'Servicio de Impuestos Internos',
				'codigo_padre' => 'AE',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			127 => 
			array (
				'codigo' => 'AE007',

				'nombre' => 'Servicio Nacional de Aduanas',
				'codigo_padre' => 'AE',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			128 => 
			array (
				'codigo' => 'AE008',

				'nombre' => 'Superintendencia de Bancos e Instituciones Financieras',
				'codigo_padre' => 'AE',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			129 => 
			array (
				'codigo' => 'AE009',

				'nombre' => 'Superintendencia de Valores y Seguros',
				'codigo_padre' => 'AE',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			130 => 
			array (
				'codigo' => 'AE011',

				'nombre' => 'Dirección de Compras y Contratación Pública',
				'codigo_padre' => 'AE',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			131 => 
			array (
				'codigo' => 'AE012',

				'nombre' => 'Superintendencia de Casinos de Juego',
				'codigo_padre' => 'AE',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),

			133 => 
			array (
				'codigo' => 'AF001',

				'nombre' => 'Subsecretaría General de la Presidencia',
				'codigo_padre' => 'AF',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			135 => 
			array (
				'codigo' => 'AG001',

				'nombre' => 'Subsecretaría General de Gobierno',
				'codigo_padre' => 'AG',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			136 => 
			array (
				'codigo' => 'AG002',

				'nombre' => 'Instituto Nacional del Deporte',
				'codigo_padre' => 'AY',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			137 => 
			array (
				'codigo' => 'AG003',

				'nombre' => 'Consejo Nacional de Televisión',
				'codigo_padre' => 'AG',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			139 => 
			array (
				'codigo' => 'AH001',

				'nombre' => 'Subsecretaría de Economía y Empresa de Menor Tamaño',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			140 => 
			array (
				'codigo' => 'AH002',

				'nombre' => 'Subsecretaría de Pesca',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			141 => 
			array (
				'codigo' => 'AH003',

				'nombre' => 'Comité de Inversiones Extranjeras',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			142 => 
			array (
				'codigo' => 'AH004',

				'nombre' => 'Corporación de Fomento de la Producción',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			143 => 
			array (
				'codigo' => 'AH005',

				'nombre' => 'Fiscalía Nacional Económica',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			144 => 
			array (
				'codigo' => 'AH007',

				'nombre' => 'Instituto Nacional de Estadísticas',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			145 => 
			array (
				'codigo' => 'AH008',

				'nombre' => 'Servicio Nacional de Turismo',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			146 => 
			array (
				'codigo' => 'AH009',

				'nombre' => 'Servicio Nacional del Consumidor',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			147 => 
			array (
				'codigo' => 'AH010',

				'nombre' => 'Servicio Nacional de Pesca',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			148 => 
			array (
				'codigo' => 'AH011',

				'nombre' => 'Subsecretaría de Turismo',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			149 => 
			array (
				'codigo' => 'AH012',

				'nombre' => 'Servicio de Cooperación Técnica ',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			150 => 
			array (
				'codigo' => 'AH999',

				'nombre' => 'Comité Innova Bío Bío',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			152 => 
			array (
				'codigo' => 'AI001',

				'nombre' => 'Subsecretaría de Planificación',
				'codigo_padre' => 'AI',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			153 => 
			array (
				'codigo' => 'AI002',

				'nombre' => 'Corporación Nacional de Desarrollo Indígena',
				'codigo_padre' => 'AI',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			154 => 
			array (
				'codigo' => 'AI003',

				'nombre' => 'Servicio Nacional de la Discapacidad',
				'codigo_padre' => 'AI',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			155 => 
			array (
				'codigo' => 'AI004',

				'nombre' => 'Fondo de Solidaridad e Inversión Social',
				'codigo_padre' => 'AI',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			156 => 
			array (
				'codigo' => 'AI005',

				'nombre' => 'Instituto Nacional de la Juventud',
				'codigo_padre' => 'AI',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			157 => 
			array (
				'codigo' => 'AI006',

				'nombre' => 'Servicio Nacional del Adulto Mayor',
				'codigo_padre' => 'AI',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			158 => 
			array (
				'codigo' => 'AI007',

				'nombre' => 'Subsecretaría de Evaluación Social',
				'codigo_padre' => 'AI',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			159 => 
			array (
				'codigo' => 'AI008',

				'nombre' => 'Subsecretaría de Servicios Sociales',
				'codigo_padre' => 'AI',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			161 => 
			array (
				'codigo' => 'AJ001',

				'nombre' => 'Subsecretaría de Educación',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			162 => 
			array (
				'codigo' => 'AJ002',

				'nombre' => 'Consejo de Rectores de las Universidades Chilenas',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			163 => 
			array (
				'codigo' => 'AJ003',

				'nombre' => 'Agencia de Calidad de la Educación',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			164 => 
			array (
				'codigo' => 'AJ004',

			'nombre' => 'Comisión Administradora del Sistema de Créditos para Estudios Superiores (Comisión Ingresa)',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			165 => 
			array (
				'codigo' => 'AJ005',

				'nombre' => 'Dirección de Bibliotecas, Archivos y Museos',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			166 => 
			array (
				'codigo' => 'AJ007',

				'nombre' => 'Consejo de Calificación Cinematográfica',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			167 => 
			array (
				'codigo' => 'AJ008',

				'nombre' => 'Comisión Nacional de Investigación Científica y Tecnológica',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			168 => 
			array (
				'codigo' => 'AJ009',

				'nombre' => 'Junta Nacional de Auxilio Escolar y Becas',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			169 => 
			array (
				'codigo' => 'AJ010',

				'nombre' => 'Junta Nacional de Jardines Infantiles',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			170 => 
			array (
				'codigo' => 'AJ011',

				'nombre' => 'Consejo de Monumentos Nacionales',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			171 => 
			array (
				'codigo' => 'AJ012',

				'nombre' => 'Consejo Nacional de Educación',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			172 => 
			array (
				'codigo' => 'AJ013',

				'nombre' => 'Superintendencia de Educación',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			174 => 
			array (
				'codigo' => 'AK001',

				'nombre' => 'Subsecretaría de Justicia',
				'codigo_padre' => 'AK',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			175 => 
			array (
				'codigo' => 'AK002',

				'nombre' => 'Servicio de Registro Civil e Identificación',
				'codigo_padre' => 'AK',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			176 => 
			array (
				'codigo' => 'AK003',

				'nombre' => 'Servicio Médico Legal',
				'codigo_padre' => 'AK',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			177 => 
			array (
				'codigo' => 'AK004',

				'nombre' => 'Servicio Nacional de Menores',
				'codigo_padre' => 'AK',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			178 => 
			array (
				'codigo' => 'AK005',

				'nombre' => 'Defensoría Penal Pública',
				'codigo_padre' => 'AK',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			179 => 
			array (
				'codigo' => 'AK006',

				'nombre' => 'Gendarmería de Chile',
				'codigo_padre' => 'AK',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			180 => 
			array (
				'codigo' => 'AK007',

				'nombre' => 'Superintendencia de Insolvencia y Reemprendimiento',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			181 => 
			array (
				'codigo' => 'AK008',

				'nombre' => 'Corporación de Asistencia Judicial Región Metropolitana',
				'codigo_padre' => 'AK',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			182 => 
			array (
				'codigo' => 'AK009',

				'nombre' => 'Corporación de Asistencia Judicial Región Valparaíso',
				'codigo_padre' => 'AK',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			183 => 
			array (
				'codigo' => 'AK010',

				'nombre' => 'Corporación de Asistencia Judicial Regiones Tarapacá y Antofagasta',
				'codigo_padre' => 'AK',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			184 => 
			array (
				'codigo' => 'AK011',

				'nombre' => 'Corporación de Asistencia Judicial Región Bío Bío',
				'codigo_padre' => 'AK',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			186 => 
			array (
				'codigo' => 'AL001',

				'nombre' => 'Subsecretaría del Trabajo',
				'codigo_padre' => 'AL',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			187 => 
			array (
				'codigo' => 'AL002',

				'nombre' => 'Subsecretaría de Previsión Social',
				'codigo_padre' => 'AL',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			188 => 
			array (
				'codigo' => 'AL003',

				'nombre' => 'Dirección del Trabajo',
				'codigo_padre' => 'AL',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			189 => 
			array (
				'codigo' => 'AL004',

				'nombre' => 'Dirección General de Crédito Prendario',
				'codigo_padre' => 'AL',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			190 => 
			array (
				'codigo' => 'AL005',

				'nombre' => 'Instituto de Previsión Social',
				'codigo_padre' => 'AL',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			191 => 
			array (
				'codigo' => 'AL006',

				'nombre' => 'Instituto de Seguridad Laboral',
				'codigo_padre' => 'AL',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			192 => 
			array (
				'codigo' => 'AL007',

				'nombre' => 'Servicio Nacional de Capacitación y Empleo',
				'codigo_padre' => 'AL',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			193 => 
			array (
				'codigo' => 'AL008',

				'nombre' => 'Superintendencia de Pensiones',
				'codigo_padre' => 'AL',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			194 => 
			array (
				'codigo' => 'AL009',

				'nombre' => 'Superintendencia de Seguridad Social',
				'codigo_padre' => 'AL',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			195 => 
			array (
				'codigo' => 'AL010',

				'nombre' => 'Comisión del Sistema Nacional de Certificación de Competencias Laborales',
				'codigo_padre' => 'AL',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			197 => 
			array (
				'codigo' => 'AM001',

				'nombre' => 'Subsecretaría de Obras Públicas',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			198 => 
			array (
				'codigo' => 'AM002',

				'nombre' => 'Dirección General de Obras Públicas',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			199 => 
			array (
				'codigo' => 'AM003',

				'nombre' => 'Dirección de Contabilidad y Finanzas',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			200 => 
			array (
				'codigo' => 'AM004',

				'nombre' => 'Dirección de Aeropuertos',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			201 => 
			array (
				'codigo' => 'AM005',

				'nombre' => 'Dirección de Arquitectura',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			202 => 
			array (
				'codigo' => 'AM006',

				'nombre' => 'Dirección General de Aguas',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			203 => 
			array (
				'codigo' => 'AM007',

				'nombre' => 'Dirección de Obras Hidráulicas',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			204 => 
			array (
				'codigo' => 'AM008',

				'nombre' => 'Dirección de Obras Portuarias',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			205 => 
			array (
				'codigo' => 'AM009',

				'nombre' => 'Dirección de Planeamiento ',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			206 => 
			array (
				'codigo' => 'AM010',

				'nombre' => 'Dirección de Vialidad',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			207 => 
			array (
				'codigo' => 'AM011',

				'nombre' => 'Superintendencia de Servicios Sanitarios',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			208 => 
			array (
				'codigo' => 'AM012',

				'nombre' => 'Instituto Nacional de Hidráulica',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			209 => 
			array (
				'codigo' => 'AM013',

				'nombre' => 'Fiscalía Ministerio de Obras Públicas',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			210 => 
			array (
				'codigo' => 'AM014',

				'nombre' => 'Coordinación de Concesiones de Obras Públicas',
				'codigo_padre' => 'AM',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			212 => 
			array (
				'codigo' => 'AN001',

				'nombre' => 'Subsecretaría de Transportes',
				'codigo_padre' => 'AN',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			213 => 
			array (
				'codigo' => 'AN002',

				'nombre' => 'Subsecretaría de Telecomunicaciones',
				'codigo_padre' => 'AN',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			214 => 
			array (
				'codigo' => 'AN003',

				'nombre' => 'Junta de Aeronáutica Civil',
				'codigo_padre' => 'AN',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			215 => 
			array (
				'codigo' => 'AN998',

				'nombre' => 'Centro de Control y Certificación Vehicular',
				'codigo_padre' => 'AN',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			216 => 
			array (
				'codigo' => 'AN999',

				'nombre' => 'Unidad Operativa de Control de Tránsito',
				'codigo_padre' => 'AN',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			218 => 
			array (
				'codigo' => 'AO001',

				'nombre' => 'Subsecretaría de Salud Pública',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			219 => 
			array (
				'codigo' => 'AO002',

				'nombre' => 'Subsecretaría de Redes Asistenciales',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			220 => 
			array (
				'codigo' => 'AO003',

				'nombre' => 'Central de Abastecimiento del Sistema Nacional de Servicios de Salud',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			221 => 
			array (
				'codigo' => 'AO004',

				'nombre' => 'Fondo Nacional de Salud',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			222 => 
			array (
				'codigo' => 'AO005',

				'nombre' => 'Instituto de Salud Pública',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			223 => 
			array (
				'codigo' => 'AO006',

				'nombre' => 'Superintendencia de Salud',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			224 => 
			array (
				'codigo' => 'AO007',

				'nombre' => 'Servicio de Salud Metropolitano Central',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			225 => 
			array (
				'codigo' => 'AO008',

				'nombre' => 'Servicio de Salud Metropolitano Norte',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			226 => 
			array (
				'codigo' => 'AO009',

				'nombre' => 'Servicio de Salud Metropolitano Occidente',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			227 => 
			array (
				'codigo' => 'AO010',

				'nombre' => 'Servicio de Salud Metropolitano Oriente',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			228 => 
			array (
				'codigo' => 'AO011',

				'nombre' => 'Servicio de Salud Metropolitano Sur',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			229 => 
			array (
				'codigo' => 'AO012',

				'nombre' => 'Servicio de Salud Metropolitano Sur Oriente',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			230 => 
			array (
				'codigo' => 'AO013',

				'nombre' => 'Hospital Padre Hurtado',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			231 => 
			array (
				'codigo' => 'AO014',

				'nombre' => 'Centro de Referencia de Salud de Peñalolén Cordillera Oriente',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			232 => 
			array (
				'codigo' => 'AO015',

				'nombre' => 'Centro de Referencia de Salud de Maipú',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			233 => 
			array (
				'codigo' => 'AO016',

				'nombre' => 'Servicio de Salud Arica',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			234 => 
			array (
				'codigo' => 'AO017',

				'nombre' => 'Servicio de Salud Iquique',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			235 => 
			array (
				'codigo' => 'AO018',

				'nombre' => 'Servicio de Salud Antofagasta',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			236 => 
			array (
				'codigo' => 'AO019',

				'nombre' => 'Servicio de Salud Atacama',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			237 => 
			array (
				'codigo' => 'AO020',

				'nombre' => 'Servicio de Salud Coquimbo',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			238 => 
			array (
				'codigo' => 'AO021',

				'nombre' => 'Servicio de Salud Aconcagua',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			239 => 
			array (
				'codigo' => 'AO022',

				'nombre' => 'Servicio de Salud Valparaíso - San Antonio',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			240 => 
			array (
				'codigo' => 'AO023',

				'nombre' => 'Servicio de Salud Viña Del Mar - Quillota',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			241 => 
			array (
				'codigo' => 'AO024',

				'nombre' => 'Servicio de Salud O´Higgins',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			242 => 
			array (
				'codigo' => 'AO025',

				'nombre' => 'Servicio de Salud Maule',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			243 => 
			array (
				'codigo' => 'AO026',

				'nombre' => 'Servicio de Salud Ñuble',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			244 => 
			array (
				'codigo' => 'AO027',

				'nombre' => 'Servicio de Salud Concepción',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			245 => 
			array (
				'codigo' => 'AO028',

				'nombre' => 'Servicio de Salud Talcahuano',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			246 => 
			array (
				'codigo' => 'AO029',

				'nombre' => 'Servicio de Salud Bío Bío',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			247 => 
			array (
				'codigo' => 'AO030',

				'nombre' => 'Servicio de Salud Arauco',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			248 => 
			array (
				'codigo' => 'AO031',

				'nombre' => 'Servicio de Salud Araucanía Norte',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			249 => 
			array (
				'codigo' => 'AO032',

				'nombre' => 'Servicio de Salud Araucanía Sur',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			250 => 
			array (
				'codigo' => 'AO033',

				'nombre' => 'Servicio de Salud Valdivia',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			251 => 
			array (
				'codigo' => 'AO034',

				'nombre' => 'Servicio de Salud Osorno',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			252 => 
			array (
				'codigo' => 'AO035',

				'nombre' => 'Servicio de Salud de Chiloé',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			253 => 
			array (
				'codigo' => 'AO036',

				'nombre' => 'Servicio de Salud Aysén',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			254 => 
			array (
				'codigo' => 'AO037',

				'nombre' => 'Servicio de Salud del Reloncaví',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			255 => 
			array (
				'codigo' => 'AO038',

				'nombre' => 'Servicio de Salud Magallanes',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			256 => 
			array (
				'codigo' => 'AO039',

				'nombre' => 'Secretaría Regional Ministerial de Arica y Parinacota',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			257 => 
			array (
				'codigo' => 'AO040',

				'nombre' => 'Secretaría Regional Ministerial de Tarapacá',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			258 => 
			array (
				'codigo' => 'AO041',

				'nombre' => 'Secretaría Regional Ministerial de Antofagasta',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			259 => 
			array (
				'codigo' => 'AO042',

				'nombre' => 'Secretaría Regional Ministerial de Atacama',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			260 => 
			array (
				'codigo' => 'AO043',

				'nombre' => 'Secretaría Regional Ministerial de Coquimbo',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			261 => 
			array (
				'codigo' => 'AO044',

				'nombre' => 'Secretaría Regional Ministerial de Valparaíso',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			262 => 
			array (
				'codigo' => 'AO045',

				'nombre' => 'Secretaría Regional Ministerial Metropolitano de Santiago',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			263 => 
			array (
				'codigo' => 'AO046',

				'nombre' => 'Secretaría Regional Ministerial de O´Higgins',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			264 => 
			array (
				'codigo' => 'AO047',

				'nombre' => 'Secretaría Regional Ministerial del Maule',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			265 => 
			array (
				'codigo' => 'AO048',

				'nombre' => 'Secretaría Regional Ministerial del Bío Bío',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			266 => 
			array (
				'codigo' => 'AO049',

				'nombre' => 'Secretaría Regional Ministerial de La Araucanía',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			267 => 
			array (
				'codigo' => 'AO050',

				'nombre' => 'Secretaría Regional Ministerial de Los Ríos',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			268 => 
			array (
				'codigo' => 'AO051',

				'nombre' => 'Secretaría Regional Ministerial de Los Lagos',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			269 => 
			array (
				'codigo' => 'AO052',

				'nombre' => 'Secretaría Regional Ministerial de Aysén',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			270 => 
			array (
				'codigo' => 'AO053',

				'nombre' => 'Secretaría Regional Ministerial de Magallanes y Antártica Chilena',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			271 => 
			array (
				'codigo' => 'AO054',

				'nombre' => 'Hospital de San Camilo',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			272 => 
			array (
				'codigo' => 'AO055',

				'nombre' => 'Hospital Leonardo Guzmán de Antofagasta',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			273 => 
			array (
				'codigo' => 'AO056',

				'nombre' => 'Hospital de Victoria',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			274 => 
			array (
				'codigo' => 'AO057',

				'nombre' => 'Hospital Mauricio heyermann de Angol',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			275 => 
			array (
				'codigo' => 'AO058',

				'nombre' => 'Hospital Juan Noé de Arica',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			276 => 
			array (
				'codigo' => 'AO059',

				'nombre' => 'Hospital Regional de Coyhaique',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			277 => 
			array (
				'codigo' => 'AO060',

				'nombre' => 'Hospital Víctor Ríos Ruiz de Los Angeles',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			278 => 
			array (
				'codigo' => 'AO061',

				'nombre' => 'Hospital Dr. Augusto Riffart de Castro',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			279 => 
			array (
				'codigo' => 'AO062',

				'nombre' => 'Hospital San Jose de Coronel',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			280 => 
			array (
				'codigo' => 'AO063',

				'nombre' => 'Hospital de Lota',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			281 => 
			array (
				'codigo' => 'AO064',

				'nombre' => 'Hospital Guillermo Grant Benavente de Concepción',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			282 => 
			array (
				'codigo' => 'AO065',

				'nombre' => 'Hospital de Ovalle',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			283 => 
			array (
				'codigo' => 'AO066',

				'nombre' => 'Hospital La Serena',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			284 => 
			array (
				'codigo' => 'AO067',

				'nombre' => 'Hospital San Pablo de Coquimbo',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			285 => 
			array (
				'codigo' => 'AO068',

				'nombre' => 'Hospital Ernesto Torres de Iquique',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			286 => 
			array (
				'codigo' => 'AO069',

				'nombre' => 'HUAP Posta central',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			287 => 
			array (
				'codigo' => 'AO070',

				'nombre' => 'Hospital San Borja Arriarán',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			288 => 
			array (
				'codigo' => 'AO071',

				'nombre' => 'Hospital San José',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			289 => 
			array (
				'codigo' => 'AO072',

				'nombre' => 'Hospital Roberto del Río',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			290 => 
			array (
				'codigo' => 'AO073',

				'nombre' => 'Hospital Félix Bulnes',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			291 => 
			array (
				'codigo' => 'AO074',

				'nombre' => 'Hospital de Melipilla',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			292 => 
			array (
				'codigo' => 'AO075',

				'nombre' => 'Hospital San Juan de Dios',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			293 => 
			array (
				'codigo' => 'AO076',

				'nombre' => 'Instituto Pedro Aguirre Cerda',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			294 => 
			array (
				'codigo' => 'AO077',

				'nombre' => 'Instituto de Neurocirugía',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			295 => 
			array (
				'codigo' => 'AO078',

				'nombre' => 'Instituto Nacional de Geriatría',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			296 => 
			array (
				'codigo' => 'AO079',

				'nombre' => 'Hospital Del Salvador',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			297 => 
			array (
				'codigo' => 'AO080',

				'nombre' => 'Hospital Barros Luco ',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			298 => 
			array (
				'codigo' => 'AO081',

				'nombre' => 'Hospital Sótero del Río',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			299 => 
			array (
				'codigo' => 'AO082',

				'nombre' => 'Hospital Lautaro Navarro de Punta Arenas',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			300 => 
			array (
				'codigo' => 'AO083',

				'nombre' => 'Hospital de Curicó',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			301 => 
			array (
				'codigo' => 'AO084',

				'nombre' => 'Hospital de Linares',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			302 => 
			array (
				'codigo' => 'AO085',

				'nombre' => 'Hospital Regional de Talca',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			303 => 
			array (
				'codigo' => 'AO086',

				'nombre' => 'Hospital de San Carlos',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			304 => 
			array (
				'codigo' => 'AO087',

				'nombre' => 'Hospital San Juan de Dios de San Fernando',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			305 => 
			array (
				'codigo' => 'AO088',

				'nombre' => 'Hospital Regional de Rancagua',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			306 => 
			array (
				'codigo' => 'AO089',

				'nombre' => 'Hospital de Osorno',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			307 => 
			array (
				'codigo' => 'AO090',

				'nombre' => 'Hospital de Puerto Montt',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			308 => 
			array (
				'codigo' => 'AO091',

				'nombre' => 'Hospital de Tomé',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			309 => 
			array (
				'codigo' => 'AO092',

				'nombre' => 'Hospital de Las Higueras',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			310 => 
			array (
				'codigo' => 'AO093',

				'nombre' => 'Hospital Base de Valdivia',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			311 => 
			array (
				'codigo' => 'AO094',

				'nombre' => 'Hospital Claudio Vicuña de San Antonio',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			312 => 
			array (
				'codigo' => 'AO095',

				'nombre' => 'Hospital Carlos Van Büren',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			313 => 
			array (
				'codigo' => 'AO096',

				'nombre' => 'Hospital Eduardo Pereira de Valparaíso',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			314 => 
			array (
				'codigo' => 'AO097',

				'nombre' => 'Hospital de Quilpué',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			315 => 
			array (
				'codigo' => 'AO098',

				'nombre' => 'Hospital Gustavo Fricke',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			316 => 
			array (
				'codigo' => 'AO099',

				'nombre' => 'Hospital San Martín de Quillota',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			317 => 
			array (
				'codigo' => 'AO100',

				'nombre' => 'Instituto Psiquiátrico',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			318 => 
			array (
				'codigo' => 'AO101',

				'nombre' => 'Hospital San Juan de Dios de Los Andes',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			319 => 
			array (
				'codigo' => 'AO102',

				'nombre' => 'Hospital Exequiel González',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			320 => 
			array (
				'codigo' => 'AO103',

				'nombre' => 'Hospital El Pino',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			321 => 
			array (
				'codigo' => 'AO104',

				'nombre' => 'Hospital Herminda Martin',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			322 => 
			array (
				'codigo' => 'AO105',

				'nombre' => 'Instituto Nacional del Tórax',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			323 => 
			array (
				'codigo' => 'AO106',

				'nombre' => 'Hospital Luis Tisné',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			324 => 
			array (
				'codigo' => 'AO107',

				'nombre' => 'Instituto Traumatológico',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			325 => 
			array (
				'codigo' => 'AO108',

				'nombre' => 'Instituto Nacional del Cáncer',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			326 => 
			array (
				'codigo' => 'AO109',

				'nombre' => 'Hospital Luis Calvo Mackenna',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			327 => 
			array (
				'codigo' => 'AO110',

				'nombre' => 'Hospital Dr. Hernán Henríquez Aravena de Temuco',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			328 => 
			array (
				'codigo' => 'AO998',

				'nombre' => 'Autoridad Sanitaria',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			329 => 
			array (
				'codigo' => 'AO999',

				'nombre' => 'Comisión de Medicina Preventiva e Invalidez',
				'codigo_padre' => 'AO',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			331 => 
			array (
				'codigo' => 'AP001',

				'nombre' => 'Subsecretaría de Vivienda y Urbanismo',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			332 => 
			array (
				'codigo' => 'AP002',

				'nombre' => 'SERVIU Región de Tarapacá',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			333 => 
			array (
				'codigo' => 'AP003',

				'nombre' => 'SERVIU Región de Antofagasta',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			334 => 
			array (
				'codigo' => 'AP004',

				'nombre' => 'SERVIU Región de Atacama',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			335 => 
			array (
				'codigo' => 'AP005',

				'nombre' => 'SERVIU Región de Coquimbo',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			336 => 
			array (
				'codigo' => 'AP006',

				'nombre' => 'SERVIU Región de Valparaíso',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			337 => 
			array (
				'codigo' => 'AP007',

				'nombre' => 'SERVIU Región Metropolitana de Santiago',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			338 => 
			array (
				'codigo' => 'AP008',

				'nombre' => 'SERVIU Región del Libertador Bernardo O\'Higgins',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			339 => 
			array (
				'codigo' => 'AP009',

				'nombre' => 'SERVIU Región del Maule',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			340 => 
			array (
				'codigo' => 'AP010',

				'nombre' => 'SERVIU Región del Bío Bío',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			341 => 
			array (
				'codigo' => 'AP011',

				'nombre' => 'SERVIU Región de la Araucanía',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			342 => 
			array (
				'codigo' => 'AP012',

				'nombre' => 'SERVIU Región de los Lagos',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			343 => 
			array (
				'codigo' => 'AP013',

				'nombre' => 'SERVIU Región de Aysén del General Carlos Ibáñez del Campo',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			344 => 
			array (
				'codigo' => 'AP014',

				'nombre' => 'SERVIU Región de Magallanes y la Antártica Chilena',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			345 => 
			array (
				'codigo' => 'AP015',

				'nombre' => 'SERVIU Región de Los Ríos',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			346 => 
			array (
				'codigo' => 'AP016',

				'nombre' => 'SERVIU Arica y Parinacota',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			347 => 
			array (
				'codigo' => 'AP017',

				'nombre' => 'Parque Metropolitano de Santiago',
				'codigo_padre' => 'AP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			349 => 
			array (
				'codigo' => 'AQ001',

				'nombre' => 'Subsecretaría de Bienes Nacionales',
				'codigo_padre' => 'AQ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			351 => 
			array (
				'codigo' => 'AR001',

				'nombre' => 'Subsecretaría de Agricultura',
				'codigo_padre' => 'AR',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			352 => 
			array (
				'codigo' => 'AR002',

				'nombre' => 'Comisión Nacional de Riego',
				'codigo_padre' => 'AR',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			353 => 
			array (
				'codigo' => 'AR003',

				'nombre' => 'Corporación Nacional Forestal',
				'codigo_padre' => 'AR',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			354 => 
			array (
				'codigo' => 'AR004',

				'nombre' => 'Instituto de Desarrollo Agropecuario',
				'codigo_padre' => 'AR',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			355 => 
			array (
				'codigo' => 'AR005',

				'nombre' => 'Oficinas de Estudios y Políticas Agrarias',
				'codigo_padre' => 'AR',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			356 => 
			array (
				'codigo' => 'AR006',

				'nombre' => 'Servicio Agrícola y Ganadero',
				'codigo_padre' => 'AR',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			358 => 
			array (
				'codigo' => 'AS001',

				'nombre' => 'Subsecretaría de Minería',
				'codigo_padre' => 'AS',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			359 => 
			array (
				'codigo' => 'AS002',

				'nombre' => 'Comisión Chilena del Cobre',
				'codigo_padre' => 'AS',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			360 => 
			array (
				'codigo' => 'AS004',

				'nombre' => 'Servicio Nacional de Geología y Minería',
				'codigo_padre' => 'AS',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			362 => 
			array (
				'codigo' => 'AT001',

				'nombre' => 'Servicio Nacional de la Mujer',
				'codigo_padre' => 'AT',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			364 => 
			array (
				'codigo' => 'AU001',

				'nombre' => 'Comisión Nacional de Energía',
				'codigo_padre' => 'AU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			365 => 
			array (
				'codigo' => 'AU002',

				'nombre' => 'Subsecretaría de Energía',
				'codigo_padre' => 'AU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			366 => 
			array (
				'codigo' => 'AU003',

				'nombre' => 'Comisión Chilena de Energía Nuclear',
				'codigo_padre' => 'AU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			367 => 
			array (
				'codigo' => 'AU004',

				'nombre' => 'Superintendencia de Electricidad y Combustibles',
				'codigo_padre' => 'AU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			369 => 
			array (
				'codigo' => 'AV001',

				'nombre' => 'Consejo Nacional de la Cultura y las Artes',
				'codigo_padre' => 'AV',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			371 => 
			array (
				'codigo' => 'AW001',

				'nombre' => 'Comisión Nacional del Medio Ambiente',
				'codigo_padre' => 'AW',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			372 => 
			array (
				'codigo' => 'AW002',

				'nombre' => 'Subsecretaría del Medio Ambiente',
				'codigo_padre' => 'AW',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			373 => 
			array (
				'codigo' => 'AW003',

				'nombre' => 'Superintendencia del Medio Ambiente',
				'codigo_padre' => 'AW',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			374 => 
			array (
				'codigo' => 'AW004',

				'nombre' => 'Servicio Evaluación Ambiental',
				'codigo_padre' => 'AW',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			376 => 
			array (
				'codigo' => 'AX001',

				'nombre' => 'Consejo de Defensa del Estado',
				'codigo_padre' => 'AX',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			378 => 
			array (
				'codigo' => 'AY001',

				'nombre' => 'Instituto Nacional de Propiedad Industrial',
				'codigo_padre' => 'AH',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			379 => 
			array (
				'codigo' => 'AY002',

				'nombre' => 'Subsecretaría del Deporte',
				'codigo_padre' => 'AY',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			380 => 
			array (
				'codigo' => 'AZ001',

				'nombre' => 'Comisión Nacional de Acreditación',
				'codigo_padre' => 'AJ',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			382 => 
			array (
				'codigo' => 'EP001',

				'nombre' => 'Astilleros y Maestranzas de La Armada',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			383 => 
			array (
				'codigo' => 'EP002',

				'nombre' => 'Casa de Moneda de Chile S.A.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			384 => 
			array (
				'codigo' => 'EP003',

			'nombre' => 'Cimm (Centro de Investigación Minera y Metalúrgica)',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			385 => 
			array (
				'codigo' => 'EP004',

				'nombre' => 'Cimm Tecnologías y Servicios S.A.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			386 => 
			array (
				'codigo' => 'EP005',

				'nombre' => 'Comercializadora de Trigo S.A.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			387 => 
			array (
				'codigo' => 'EP006',

				'nombre' => 'Corporación Nacional del Cobre de Chile',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			388 => 
			array (
				'codigo' => 'EP007',

				'nombre' => 'Empresa Concesionaria de Servicios Sanitarios S.A.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			389 => 
			array (
				'codigo' => 'EP008',

				'nombre' => 'Empresa de Abastecimiento de Zonas Aisladas',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			390 => 
			array (
				'codigo' => 'EP009',

				'nombre' => 'Empresa de Correos de Chile',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			391 => 
			array (
				'codigo' => 'EP010',

				'nombre' => 'Empresa de los Ferrocarriles del Estado',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			392 => 
			array (
				'codigo' => 'EP011',

				'nombre' => 'Empresa de Servicios Sanitarios Lago Peñuelas S.A.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			393 => 
			array (
				'codigo' => 'EP012',

				'nombre' => 'Empresa de Transporte de Pasajeros Metro S.A.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			394 => 
			array (
				'codigo' => 'EP013',

				'nombre' => 'Empresa Nacional de Aeronáutica',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			395 => 
			array (
				'codigo' => 'EP014',

				'nombre' => 'Empresa Nacional de Minería',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			396 => 
			array (
				'codigo' => 'EP015',

				'nombre' => 'Empresa Nacional del Carbón S.A.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			397 => 
			array (
				'codigo' => 'EP016',

				'nombre' => 'Empresa Nacional del Petróleo',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			398 => 
			array (
				'codigo' => 'EP017',

				'nombre' => 'Empresa Periodística La Nación S.A.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			399 => 
			array (
				'codigo' => 'EP018',

				'nombre' => 'Empresa Portuaria Antofagasta',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			400 => 
			array (
				'codigo' => 'EP019',

				'nombre' => 'Empresa Portuaria Arica',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			401 => 
			array (
				'codigo' => 'EP020',

				'nombre' => 'Empresa Portuaria Austral',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			402 => 
			array (
				'codigo' => 'EP021',

				'nombre' => 'Empresa Portuaria Chacabuco',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			403 => 
			array (
				'codigo' => 'EP022',

				'nombre' => 'Empresa Portuaria Coquimbo',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			404 => 
			array (
				'codigo' => 'EP023',

				'nombre' => 'Empresa Portuaria Iquique',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			405 => 
			array (
				'codigo' => 'EP024',

				'nombre' => 'Empresa Portuaria Puerto Montt',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			406 => 
			array (
				'codigo' => 'EP025',

				'nombre' => 'Empresa Portuaria San Antonio',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			407 => 
			array (
				'codigo' => 'EP026',

				'nombre' => 'Empresa Portuaria Talcahuano San Vicente',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			408 => 
			array (
				'codigo' => 'EP027',

				'nombre' => 'Empresa Portuaria Valparaíso',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			409 => 
			array (
				'codigo' => 'EP028',

				'nombre' => 'Fábrica y Maestranzas del Ejército',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			410 => 
			array (
				'codigo' => 'EP029',

				'nombre' => 'Polla Chilena de Beneficencia S.A.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			411 => 
			array (
				'codigo' => 'EP030',

				'nombre' => 'Puerto Madero Impresores S.A.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			412 => 
			array (
				'codigo' => 'EP031',

				'nombre' => 'Sociedad Agrícola Sacor Ltda.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			413 => 
			array (
				'codigo' => 'EP032',

				'nombre' => 'Sociedad Agrícola y Servicios Isla de Pascua Ltda.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			414 => 
			array (
				'codigo' => 'EP033',

				'nombre' => 'Televisión Nacional de Chile',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			415 => 
			array (
				'codigo' => 'EP034',

				'nombre' => 'Zona Franca de Iquique S.A.',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			416 => 
			array (
				'codigo' => 'EP035',

				'nombre' => 'Metro',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			417 => 
			array (
				'codigo' => 'EP036',

				'nombre' => 'Polla Chilena',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			418 => 
			array (
				'codigo' => 'EP037',

				'nombre' => 'Empresas de Servicios Sanitarios',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			419 => 
			array (
				'codigo' => 'EP038',

				'nombre' => 'Zofri',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			420 => 
			array (
				'codigo' => 'EP039',

				'nombre' => 'Empresas Portuarias',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			421 => 
			array (
				'codigo' => 'EP040',

				'nombre' => 'Televisión Nacional de Chile',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			422 => 
			array (
				'codigo' => 'EP041',

				'nombre' => 'Empresa de los Ferrocarriles del Estado',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			423 => 
			array (
				'codigo' => 'EP042',

				'nombre' => 'Empresa de Correos de Chile',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			424 => 
			array (
				'codigo' => 'EP043',

				'nombre' => 'Banco del Estado',
				'codigo_padre' => 'EP',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			426 => 
			array (
				'codigo' => 'FU001',

				'nombre' => 'Fundación Artesanías de Chile',
				'codigo_padre' => 'FU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			427 => 
			array (
				'codigo' => 'FU002',

				'nombre' => 'Fundación de las Familias',
				'codigo_padre' => 'FU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			428 => 
			array (
				'codigo' => 'FU003',

				'nombre' => 'Fundación Chilenter',
				'codigo_padre' => 'FU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			429 => 
			array (
				'codigo' => 'FU004',

				'nombre' => 'Fundación Integra',
				'codigo_padre' => 'FU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			430 => 
			array (
				'codigo' => 'FU005',

				'nombre' => 'Fundación Orquestas Juveniles',
				'codigo_padre' => 'FU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			431 => 
			array (
				'codigo' => 'FU006',

				'nombre' => 'Fundación de Promoción y Desarrollo de la Mujer',
				'codigo_padre' => 'FU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			432 => 
			array (
				'codigo' => 'FU007',

				'nombre' => 'Fundación Tiempos Nuevos',
				'codigo_padre' => 'FU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			434 => 
			array (
				'codigo' => 'MU001',

				'nombre' => 'Municipalidad de Algarrobo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			435 => 
			array (
				'codigo' => 'MU002',

				'nombre' => 'Municipalidad de Alhué',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			436 => 
			array (
				'codigo' => 'MU003',

				'nombre' => 'Municipalidad de Alto Biobío',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			437 => 
			array (
				'codigo' => 'MU004',

				'nombre' => 'Municipalidad de Alto del Carmen',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			438 => 
			array (
				'codigo' => 'MU005',

				'nombre' => 'Municipalidad de Alto Hospicio',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			439 => 
			array (
				'codigo' => 'MU006',

				'nombre' => 'Municipalidad de Ancud',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			440 => 
			array (
				'codigo' => 'MU007',

				'nombre' => 'Municipalidad de Andacollo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			441 => 
			array (
				'codigo' => 'MU008',

				'nombre' => 'Municipalidad de Angol',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			442 => 
			array (
				'codigo' => 'MU009',

				'nombre' => 'Municipalidad de Antofagasta',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			443 => 
			array (
				'codigo' => 'MU010',

				'nombre' => 'Municipalidad de Antuco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			444 => 
			array (
				'codigo' => 'MU011',

				'nombre' => 'Municipalidad de Arauco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			445 => 
			array (
				'codigo' => 'MU012',

				'nombre' => 'Municipalidad de Arica',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			446 => 
			array (
				'codigo' => 'MU013',

				'nombre' => 'Municipalidad de Aysen',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			447 => 
			array (
				'codigo' => 'MU014',

				'nombre' => 'Municipalidad de Buin',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			448 => 
			array (
				'codigo' => 'MU015',

				'nombre' => 'Municipalidad de Bulnes',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			449 => 
			array (
				'codigo' => 'MU016',

				'nombre' => 'Municipalidad de Cabildo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			450 => 
			array (
				'codigo' => 'MU017',

				'nombre' => 'Municipalidad de Cabo de Hornos y Antártica',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			451 => 
			array (
				'codigo' => 'MU018',

				'nombre' => 'Municipalidad de Cabrero',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			452 => 
			array (
				'codigo' => 'MU019',

				'nombre' => 'Municipalidad de Calama',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			453 => 
			array (
				'codigo' => 'MU020',

				'nombre' => 'Municipalidad de Calbuco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			454 => 
			array (
				'codigo' => 'MU021',

				'nombre' => 'Municipalidad de Caldera',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			455 => 
			array (
				'codigo' => 'MU022',

				'nombre' => 'Municipalidad de Calera de Tango',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			456 => 
			array (
				'codigo' => 'MU023',

				'nombre' => 'Municipalidad de Calle Larga',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			457 => 
			array (
				'codigo' => 'MU024',

				'nombre' => 'Municipalidad de Camarones',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			458 => 
			array (
				'codigo' => 'MU025',

				'nombre' => 'Municipalidad de Camiña',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			459 => 
			array (
				'codigo' => 'MU026',

				'nombre' => 'Municipalidad de Canela',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			460 => 
			array (
				'codigo' => 'MU027',

				'nombre' => 'Municipalidad de Cañete',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			461 => 
			array (
				'codigo' => 'MU028',

				'nombre' => 'Municipalidad de Carahue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			462 => 
			array (
				'codigo' => 'MU029',

				'nombre' => 'Municipalidad de Cartagena',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			463 => 
			array (
				'codigo' => 'MU030',

				'nombre' => 'Municipalidad de Casablanca',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			464 => 
			array (
				'codigo' => 'MU031',

				'nombre' => 'Municipalidad de Castro',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			465 => 
			array (
				'codigo' => 'MU032',

				'nombre' => 'Municipalidad de Catemu',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			466 => 
			array (
				'codigo' => 'MU033',

				'nombre' => 'Municipalidad de Cauquenes',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			467 => 
			array (
				'codigo' => 'MU034',

				'nombre' => 'Municipalidad de Cerrillos',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			468 => 
			array (
				'codigo' => 'MU035',

				'nombre' => 'Municipalidad de Cerro Navia',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			469 => 
			array (
				'codigo' => 'MU036',

				'nombre' => 'Municipalidad de Chaitén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			470 => 
			array (
				'codigo' => 'MU037',

				'nombre' => 'Municipalidad de Chanco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			471 => 
			array (
				'codigo' => 'MU038',

				'nombre' => 'Municipalidad de Chañaral',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			472 => 
			array (
				'codigo' => 'MU039',

				'nombre' => 'Municipalidad de Chépica',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			473 => 
			array (
				'codigo' => 'MU040',

				'nombre' => 'Municipalidad de Chiguayante',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			474 => 
			array (
				'codigo' => 'MU041',

				'nombre' => 'Municipalidad de Chile Chico',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			475 => 
			array (
				'codigo' => 'MU042',

				'nombre' => 'Municipalidad de Chillán',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			476 => 
			array (
				'codigo' => 'MU043',

				'nombre' => 'Municipalidad de Chillán Viejo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			477 => 
			array (
				'codigo' => 'MU044',

				'nombre' => 'Municipalidad de Chimbarongo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			478 => 
			array (
				'codigo' => 'MU045',

				'nombre' => 'Municipalidad de Cholchol',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			479 => 
			array (
				'codigo' => 'MU046',

				'nombre' => 'Municipalidad de Chonchi',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			480 => 
			array (
				'codigo' => 'MU047',

				'nombre' => 'Municipalidad de Cisnes',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			481 => 
			array (
				'codigo' => 'MU048',

				'nombre' => 'Municipalidad de Cobquecura',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			482 => 
			array (
				'codigo' => 'MU049',

				'nombre' => 'Municipalidad de Cochamó',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			483 => 
			array (
				'codigo' => 'MU050',

				'nombre' => 'Municipalidad de Cochrane',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			484 => 
			array (
				'codigo' => 'MU051',

				'nombre' => 'Municipalidad de Codegua',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			485 => 
			array (
				'codigo' => 'MU052',

				'nombre' => 'Municipalidad de Coelemu',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			486 => 
			array (
				'codigo' => 'MU053',

				'nombre' => 'Municipalidad de Coihueco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			487 => 
			array (
				'codigo' => 'MU054',

				'nombre' => 'Municipalidad de Coinco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			488 => 
			array (
				'codigo' => 'MU055',

				'nombre' => 'Municipalidad de Colbún',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			489 => 
			array (
				'codigo' => 'MU056',

				'nombre' => 'Municipalidad de Colchane',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			490 => 
			array (
				'codigo' => 'MU057',

				'nombre' => 'Municipalidad de Colina',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			491 => 
			array (
				'codigo' => 'MU058',

				'nombre' => 'Municipalidad de Collipulli',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			492 => 
			array (
				'codigo' => 'MU059',

				'nombre' => 'Municipalidad de Coltauco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			493 => 
			array (
				'codigo' => 'MU060',

				'nombre' => 'Municipalidad de Combarbalá',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			494 => 
			array (
				'codigo' => 'MU061',

				'nombre' => 'Municipalidad de Concepción',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			495 => 
			array (
				'codigo' => 'MU062',

				'nombre' => 'Municipalidad de Conchalí',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			496 => 
			array (
				'codigo' => 'MU063',

				'nombre' => 'Municipalidad de Concón',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			497 => 
			array (
				'codigo' => 'MU064',

				'nombre' => 'Municipalidad de Constitución',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			498 => 
			array (
				'codigo' => 'MU065',

				'nombre' => 'Municipalidad de Contulmo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			499 => 
			array (
				'codigo' => 'MU066',

				'nombre' => 'Municipalidad de Copiapó',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
		\DB::table('entidades')->insert(array (
			0 => 
			array (
				'codigo' => 'MU067',

				'nombre' => 'Municipalidad de Coquimbo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'codigo' => 'MU068',

				'nombre' => 'Municipalidad de Coronel',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'codigo' => 'MU069',

				'nombre' => 'Municipalidad de Corral',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			3 => 
			array (
				'codigo' => 'MU070',

				'nombre' => 'Municipalidad de Coyhaique',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			4 => 
			array (
				'codigo' => 'MU071',

				'nombre' => 'Municipalidad de Cunco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			5 => 
			array (
				'codigo' => 'MU072',

				'nombre' => 'Municipalidad de Curacautín',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			6 => 
			array (
				'codigo' => 'MU073',

				'nombre' => 'Municipalidad de Curacaví',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			7 => 
			array (
				'codigo' => 'MU074',

				'nombre' => 'Municipalidad de Curaco de Vélez',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			8 => 
			array (
				'codigo' => 'MU075',

				'nombre' => 'Municipalidad de Curanilahue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			9 => 
			array (
				'codigo' => 'MU076',

				'nombre' => 'Municipalidad de Curarrehue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			10 => 
			array (
				'codigo' => 'MU077',

				'nombre' => 'Municipalidad de Curepto',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			11 => 
			array (
				'codigo' => 'MU078',

				'nombre' => 'Municipalidad de Curicó',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			12 => 
			array (
				'codigo' => 'MU079',

				'nombre' => 'Municipalidad de Dalcahue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			13 => 
			array (
				'codigo' => 'MU080',

				'nombre' => 'Municipalidad de Diego de Almagro',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			14 => 
			array (
				'codigo' => 'MU081',

				'nombre' => 'Municipalidad de Doñihue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			15 => 
			array (
				'codigo' => 'MU082',

				'nombre' => 'Municipalidad de El Bosque',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			16 => 
			array (
				'codigo' => 'MU083',

				'nombre' => 'Municipalidad de El Carmen',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			17 => 
			array (
				'codigo' => 'MU084',

				'nombre' => 'Municipalidad de El Monte',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			18 => 
			array (
				'codigo' => 'MU085',

				'nombre' => 'Municipalidad de El Quisco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			19 => 
			array (
				'codigo' => 'MU086',

				'nombre' => 'Municipalidad de El Tabo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			20 => 
			array (
				'codigo' => 'MU087',

				'nombre' => 'Municipalidad de Empedrado',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			21 => 
			array (
				'codigo' => 'MU088',

				'nombre' => 'Municipalidad de Ercilla',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			22 => 
			array (
				'codigo' => 'MU089',

				'nombre' => 'Municipalidad de Estación Central',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			23 => 
			array (
				'codigo' => 'MU090',

				'nombre' => 'Municipalidad de Florida',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			24 => 
			array (
				'codigo' => 'MU091',

				'nombre' => 'Municipalidad de Freire',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			25 => 
			array (
				'codigo' => 'MU092',

				'nombre' => 'Municipalidad de Freirina',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			26 => 
			array (
				'codigo' => 'MU093',

				'nombre' => 'Municipalidad de Fresia',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			27 => 
			array (
				'codigo' => 'MU094',

				'nombre' => 'Municipalidad de Frutillar',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			28 => 
			array (
				'codigo' => 'MU095',

				'nombre' => 'Municipalidad de Futaleufú',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			29 => 
			array (
				'codigo' => 'MU096',

				'nombre' => 'Municipalidad de Futrono',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			30 => 
			array (
				'codigo' => 'MU097',

				'nombre' => 'Municipalidad de Galvarino',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			31 => 
			array (
				'codigo' => 'MU098',

				'nombre' => 'Municipalidad de General Lagos',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			32 => 
			array (
				'codigo' => 'MU099',

				'nombre' => 'Municipalidad de Gorbea',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			33 => 
			array (
				'codigo' => 'MU100',

				'nombre' => 'Municipalidad de Graneros',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			34 => 
			array (
				'codigo' => 'MU101',

				'nombre' => 'Municipalidad de Guaitecas',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			35 => 
			array (
				'codigo' => 'MU102',

				'nombre' => 'Municipalidad de Hijuelas',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			36 => 
			array (
				'codigo' => 'MU103',

				'nombre' => 'Municipalidad de Hualaihué',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			37 => 
			array (
				'codigo' => 'MU104',

				'nombre' => 'Municipalidad de Hualañé',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			38 => 
			array (
				'codigo' => 'MU105',

				'nombre' => 'Municipalidad de Hualpén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			39 => 
			array (
				'codigo' => 'MU106',

				'nombre' => 'Municipalidad de Hualqui',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			40 => 
			array (
				'codigo' => 'MU107',

				'nombre' => 'Municipalidad de Huara',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			41 => 
			array (
				'codigo' => 'MU108',

				'nombre' => 'Municipalidad de Huasco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			42 => 
			array (
				'codigo' => 'MU109',

				'nombre' => 'Municipalidad de Huechuraba',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			43 => 
			array (
				'codigo' => 'MU110',

				'nombre' => 'Municipalidad de Illapel',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			44 => 
			array (
				'codigo' => 'MU111',

				'nombre' => 'Municipalidad de Independencia',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			45 => 
			array (
				'codigo' => 'MU112',

				'nombre' => 'Municipalidad de Iquique',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			46 => 
			array (
				'codigo' => 'MU113',

				'nombre' => 'Municipalidad de Isla de Maipo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			47 => 
			array (
				'codigo' => 'MU114',

				'nombre' => 'Municipalidad de Isla de Pascua',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			48 => 
			array (
				'codigo' => 'MU115',

				'nombre' => 'Municipalidad de Juan Fernández',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			49 => 
			array (
				'codigo' => 'MU116',

				'nombre' => 'Municipalidad de La Calera',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			50 => 
			array (
				'codigo' => 'MU117',

				'nombre' => 'Municipalidad de La Cisterna',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			51 => 
			array (
				'codigo' => 'MU118',

				'nombre' => 'Municipalidad de La Cruz',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			52 => 
			array (
				'codigo' => 'MU119',

				'nombre' => 'Municipalidad de La Estrella',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			53 => 
			array (
				'codigo' => 'MU120',

				'nombre' => 'Municipalidad de La Florida',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			54 => 
			array (
				'codigo' => 'MU121',

				'nombre' => 'Municipalidad de La Granja',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			55 => 
			array (
				'codigo' => 'MU122',

				'nombre' => 'Municipalidad de La Higuera',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			56 => 
			array (
				'codigo' => 'MU123',

				'nombre' => 'Municipalidad de La Ligua',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			57 => 
			array (
				'codigo' => 'MU124',

				'nombre' => 'Municipalidad de La Pintana',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			58 => 
			array (
				'codigo' => 'MU125',

				'nombre' => 'Municipalidad de La Reina',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			59 => 
			array (
				'codigo' => 'MU126',

				'nombre' => 'Municipalidad de La Serena',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			60 => 
			array (
				'codigo' => 'MU127',

				'nombre' => 'Municipalidad de La Unión',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			61 => 
			array (
				'codigo' => 'MU128',

				'nombre' => 'Municipalidad de Lago Ranco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			62 => 
			array (
				'codigo' => 'MU129',

				'nombre' => 'Municipalidad de Lago Verde',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			63 => 
			array (
				'codigo' => 'MU130',

				'nombre' => 'Municipalidad de Laguna Blanca',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			64 => 
			array (
				'codigo' => 'MU131',

				'nombre' => 'Municipalidad de Laja',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			65 => 
			array (
				'codigo' => 'MU132',

				'nombre' => 'Municipalidad de Lampa',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			66 => 
			array (
				'codigo' => 'MU133',

				'nombre' => 'Municipalidad de Lanco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			67 => 
			array (
				'codigo' => 'MU134',

				'nombre' => 'Municipalidad de Las Cabras',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			68 => 
			array (
				'codigo' => 'MU135',

				'nombre' => 'Municipalidad de Las Condes',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			69 => 
			array (
				'codigo' => 'MU136',

				'nombre' => 'Municipalidad de Lautaro',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			70 => 
			array (
				'codigo' => 'MU137',

				'nombre' => 'Municipalidad de Lebu',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			71 => 
			array (
				'codigo' => 'MU138',

				'nombre' => 'Municipalidad de Licantén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			72 => 
			array (
				'codigo' => 'MU139',

				'nombre' => 'Municipalidad de Limache',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			73 => 
			array (
				'codigo' => 'MU140',

				'nombre' => 'Municipalidad de Linares',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			74 => 
			array (
				'codigo' => 'MU141',

				'nombre' => 'Municipalidad de Litueche',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			75 => 
			array (
				'codigo' => 'MU142',

				'nombre' => 'Municipalidad de Llanquihue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			76 => 
			array (
				'codigo' => 'MU143',

				'nombre' => 'Municipalidad de Llay Llay',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			77 => 
			array (
				'codigo' => 'MU144',

				'nombre' => 'Municipalidad de Lo Barnechea',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			78 => 
			array (
				'codigo' => 'MU145',

				'nombre' => 'Municipalidad de Lo Espejo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			79 => 
			array (
				'codigo' => 'MU146',

				'nombre' => 'Municipalidad de Lo Prado',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			80 => 
			array (
				'codigo' => 'MU147',

				'nombre' => 'Municipalidad de Lolol',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			81 => 
			array (
				'codigo' => 'MU148',

				'nombre' => 'Municipalidad de Loncoche',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			82 => 
			array (
				'codigo' => 'MU149',

				'nombre' => 'Municipalidad de Longaví',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			83 => 
			array (
				'codigo' => 'MU150',

				'nombre' => 'Municipalidad de Lonquimay',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			84 => 
			array (
				'codigo' => 'MU151',

				'nombre' => 'Municipalidad de Los Alamos',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			85 => 
			array (
				'codigo' => 'MU152',

				'nombre' => 'Municipalidad de Los Andes',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			86 => 
			array (
				'codigo' => 'MU153',

				'nombre' => 'Municipalidad de Los Angeles',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			87 => 
			array (
				'codigo' => 'MU154',

				'nombre' => 'Municipalidad de Los Lagos',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			88 => 
			array (
				'codigo' => 'MU155',

				'nombre' => 'Municipalidad de Los Muermos',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			89 => 
			array (
				'codigo' => 'MU156',

				'nombre' => 'Municipalidad de Los Sauces',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			90 => 
			array (
				'codigo' => 'MU157',

				'nombre' => 'Municipalidad de Los Vilos',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			91 => 
			array (
				'codigo' => 'MU158',

				'nombre' => 'Municipalidad de Lota',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			92 => 
			array (
				'codigo' => 'MU159',

				'nombre' => 'Municipalidad de Lumaco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			93 => 
			array (
				'codigo' => 'MU160',

				'nombre' => 'Municipalidad de Machalí',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			94 => 
			array (
				'codigo' => 'MU161',

				'nombre' => 'Municipalidad de Macul',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			95 => 
			array (
				'codigo' => 'MU162',

				'nombre' => 'Municipalidad de Máfil',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			96 => 
			array (
				'codigo' => 'MU163',

				'nombre' => 'Municipalidad de Maipú',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			97 => 
			array (
				'codigo' => 'MU164',

				'nombre' => 'Municipalidad de Malloa',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			98 => 
			array (
				'codigo' => 'MU165',

				'nombre' => 'Municipalidad de Marchihue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			99 => 
			array (
				'codigo' => 'MU166',

				'nombre' => 'Municipalidad de María Elena',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			100 => 
			array (
				'codigo' => 'MU167',

				'nombre' => 'Municipalidad de María Pinto',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			101 => 
			array (
				'codigo' => 'MU168',

				'nombre' => 'Municipalidad de Mariquina',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			102 => 
			array (
				'codigo' => 'MU169',

				'nombre' => 'Municipalidad de Maule',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			103 => 
			array (
				'codigo' => 'MU170',

				'nombre' => 'Municipalidad de Maullín',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			104 => 
			array (
				'codigo' => 'MU171',

				'nombre' => 'Municipalidad de Mejillones',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			105 => 
			array (
				'codigo' => 'MU172',

				'nombre' => 'Municipalidad de Melipeuco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			106 => 
			array (
				'codigo' => 'MU173',

				'nombre' => 'Municipalidad de Melipilla',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			107 => 
			array (
				'codigo' => 'MU174',

				'nombre' => 'Municipalidad de Molina',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			108 => 
			array (
				'codigo' => 'MU175',

				'nombre' => 'Municipalidad de Monte Patria',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			109 => 
			array (
				'codigo' => 'MU176',

				'nombre' => 'Municipalidad de Mostazal',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			110 => 
			array (
				'codigo' => 'MU177',

				'nombre' => 'Municipalidad de Mulchén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			111 => 
			array (
				'codigo' => 'MU178',

				'nombre' => 'Municipalidad de Nacimiento',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			112 => 
			array (
				'codigo' => 'MU179',

				'nombre' => 'Municipalidad de Nancagua',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			113 => 
			array (
				'codigo' => 'MU180',

				'nombre' => 'Municipalidad de Navidad',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			114 => 
			array (
				'codigo' => 'MU181',

				'nombre' => 'Municipalidad de Negrete',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			115 => 
			array (
				'codigo' => 'MU182',

				'nombre' => 'Municipalidad de Ninhue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			116 => 
			array (
				'codigo' => 'MU183',

				'nombre' => 'Municipalidad de Nogales',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			117 => 
			array (
				'codigo' => 'MU184',

				'nombre' => 'Municipalidad de Nueva Imperial',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			118 => 
			array (
				'codigo' => 'MU185',

				'nombre' => 'Municipalidad de Ñiquén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			119 => 
			array (
				'codigo' => 'MU186',

				'nombre' => 'Municipalidad de Ñuñoa',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			120 => 
			array (
				'codigo' => 'MU187',

				'nombre' => 'Municipalidad de O\'higgins',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			121 => 
			array (
				'codigo' => 'MU188',

				'nombre' => 'Municipalidad de Olivar',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			122 => 
			array (
				'codigo' => 'MU189',

				'nombre' => 'Municipalidad de Ollagüe',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			123 => 
			array (
				'codigo' => 'MU190',

				'nombre' => 'Municipalidad de Olmué',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			124 => 
			array (
				'codigo' => 'MU191',

				'nombre' => 'Municipalidad de Osorno',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			125 => 
			array (
				'codigo' => 'MU192',

				'nombre' => 'Municipalidad de Ovalle',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			126 => 
			array (
				'codigo' => 'MU193',

				'nombre' => 'Municipalidad de Padre Hurtado',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			127 => 
			array (
				'codigo' => 'MU194',

				'nombre' => 'Municipalidad de Padre Las Casas',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			128 => 
			array (
				'codigo' => 'MU195',

				'nombre' => 'Municipalidad de Paiguano',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			129 => 
			array (
				'codigo' => 'MU196',

				'nombre' => 'Municipalidad de Paillaco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			130 => 
			array (
				'codigo' => 'MU197',

				'nombre' => 'Municipalidad de Paine',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			131 => 
			array (
				'codigo' => 'MU198',

				'nombre' => 'Municipalidad de Palena',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			132 => 
			array (
				'codigo' => 'MU199',

				'nombre' => 'Municipalidad de Palmilla',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			133 => 
			array (
				'codigo' => 'MU200',

				'nombre' => 'Municipalidad de Panguipulli',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			134 => 
			array (
				'codigo' => 'MU201',

				'nombre' => 'Municipalidad de Panquehue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			135 => 
			array (
				'codigo' => 'MU202',

				'nombre' => 'Municipalidad de Papudo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			136 => 
			array (
				'codigo' => 'MU203',

				'nombre' => 'Municipalidad de Paredones',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			137 => 
			array (
				'codigo' => 'MU204',

				'nombre' => 'Municipalidad de Parral',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			138 => 
			array (
				'codigo' => 'MU205',

				'nombre' => 'Municipalidad de Pedro Aguirre Cerda',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			139 => 
			array (
				'codigo' => 'MU206',

				'nombre' => 'Municipalidad de Pelarco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			140 => 
			array (
				'codigo' => 'MU207',

				'nombre' => 'Municipalidad de Pelluhue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			141 => 
			array (
				'codigo' => 'MU208',

				'nombre' => 'Municipalidad de Pemuco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			142 => 
			array (
				'codigo' => 'MU209',

				'nombre' => 'Municipalidad de Pencahue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			143 => 
			array (
				'codigo' => 'MU210',

				'nombre' => 'Municipalidad de Penco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			144 => 
			array (
				'codigo' => 'MU211',

				'nombre' => 'Municipalidad de Peñaflor',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			145 => 
			array (
				'codigo' => 'MU212',

				'nombre' => 'Municipalidad de Peñalolén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			146 => 
			array (
				'codigo' => 'MU213',

				'nombre' => 'Municipalidad de Peralillo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			147 => 
			array (
				'codigo' => 'MU214',

				'nombre' => 'Municipalidad de Perquenco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			148 => 
			array (
				'codigo' => 'MU215',

				'nombre' => 'Municipalidad de Petorca',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			149 => 
			array (
				'codigo' => 'MU216',

				'nombre' => 'Municipalidad de Peumo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			150 => 
			array (
				'codigo' => 'MU217',

				'nombre' => 'Municipalidad de Pica',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			151 => 
			array (
				'codigo' => 'MU218',

				'nombre' => 'Municipalidad de Pichidegua',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			152 => 
			array (
				'codigo' => 'MU219',

				'nombre' => 'Municipalidad de Pichilemu',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			153 => 
			array (
				'codigo' => 'MU220',

				'nombre' => 'Municipalidad de Pinto',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			154 => 
			array (
				'codigo' => 'MU221',

				'nombre' => 'Municipalidad de Pirque',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			155 => 
			array (
				'codigo' => 'MU222',

				'nombre' => 'Municipalidad de Pitrufquén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			156 => 
			array (
				'codigo' => 'MU223',

				'nombre' => 'Municipalidad de Placilla',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			157 => 
			array (
				'codigo' => 'MU224',

				'nombre' => 'Municipalidad de Portezuelo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			158 => 
			array (
				'codigo' => 'MU225',

				'nombre' => 'Municipalidad de Porvenir',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			159 => 
			array (
				'codigo' => 'MU226',

				'nombre' => 'Municipalidad de Pozo Almonte',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			160 => 
			array (
				'codigo' => 'MU227',

				'nombre' => 'Municipalidad de Primavera',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			161 => 
			array (
				'codigo' => 'MU228',

				'nombre' => 'Municipalidad de Providencia',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			162 => 
			array (
				'codigo' => 'MU229',

				'nombre' => 'Municipalidad de Puchuncaví',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			163 => 
			array (
				'codigo' => 'MU230',

				'nombre' => 'Municipalidad de Pucón',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			164 => 
			array (
				'codigo' => 'MU231',

				'nombre' => 'Municipalidad de Pudahuel',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			165 => 
			array (
				'codigo' => 'MU232',

				'nombre' => 'Municipalidad de Puente Alto',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			166 => 
			array (
				'codigo' => 'MU233',

				'nombre' => 'Municipalidad de Puerto Montt',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			167 => 
			array (
				'codigo' => 'MU234',

				'nombre' => 'Municipalidad de Puerto Natales',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			168 => 
			array (
				'codigo' => 'MU235',

				'nombre' => 'Municipalidad de Puerto Octay',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			169 => 
			array (
				'codigo' => 'MU236',

				'nombre' => 'Municipalidad de Puerto Varas',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			170 => 
			array (
				'codigo' => 'MU237',

				'nombre' => 'Municipalidad de Pumanque',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			171 => 
			array (
				'codigo' => 'MU238',

				'nombre' => 'Municipalidad de Punitaqui',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			172 => 
			array (
				'codigo' => 'MU239',

				'nombre' => 'Municipalidad de Punta Arenas',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			173 => 
			array (
				'codigo' => 'MU240',

				'nombre' => 'Municipalidad de Puqueldón',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			174 => 
			array (
				'codigo' => 'MU241',

				'nombre' => 'Municipalidad de Purén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			175 => 
			array (
				'codigo' => 'MU242',

				'nombre' => 'Municipalidad de Purranque',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			176 => 
			array (
				'codigo' => 'MU243',

				'nombre' => 'Municipalidad de Putaendo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			177 => 
			array (
				'codigo' => 'MU244',

				'nombre' => 'Municipalidad de Putre',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			178 => 
			array (
				'codigo' => 'MU245',

				'nombre' => 'Municipalidad de Puyehue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			179 => 
			array (
				'codigo' => 'MU246',

				'nombre' => 'Municipalidad de Queilén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			180 => 
			array (
				'codigo' => 'MU247',

				'nombre' => 'Municipalidad de Quellón',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			181 => 
			array (
				'codigo' => 'MU248',

				'nombre' => 'Municipalidad de Quemchi',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			182 => 
			array (
				'codigo' => 'MU249',

				'nombre' => 'Municipalidad de Quilaco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			183 => 
			array (
				'codigo' => 'MU250',

				'nombre' => 'Municipalidad de Quilicura',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			184 => 
			array (
				'codigo' => 'MU251',

				'nombre' => 'Municipalidad de Quilleco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			185 => 
			array (
				'codigo' => 'MU252',

				'nombre' => 'Municipalidad de Quillón',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			186 => 
			array (
				'codigo' => 'MU253',

				'nombre' => 'Municipalidad de Quillota',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			187 => 
			array (
				'codigo' => 'MU254',

				'nombre' => 'Municipalidad de Quilpué',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			188 => 
			array (
				'codigo' => 'MU255',

				'nombre' => 'Municipalidad de Quinchao',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			189 => 
			array (
				'codigo' => 'MU256',

				'nombre' => 'Municipalidad de Quinta de Tilcoco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			190 => 
			array (
				'codigo' => 'MU257',

				'nombre' => 'Municipalidad de Quinta Normal',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			191 => 
			array (
				'codigo' => 'MU258',

				'nombre' => 'Municipalidad de Quintero',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			192 => 
			array (
				'codigo' => 'MU259',

				'nombre' => 'Municipalidad de Quirihue',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			193 => 
			array (
				'codigo' => 'MU260',

				'nombre' => 'Municipalidad de Rancagua',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			194 => 
			array (
				'codigo' => 'MU261',

				'nombre' => 'Municipalidad de Ránquil',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			195 => 
			array (
				'codigo' => 'MU262',

				'nombre' => 'Municipalidad de Rauco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			196 => 
			array (
				'codigo' => 'MU263',

				'nombre' => 'Municipalidad de Recoleta',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			197 => 
			array (
				'codigo' => 'MU264',

				'nombre' => 'Municipalidad de Renaico',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			198 => 
			array (
				'codigo' => 'MU265',

				'nombre' => 'Municipalidad de Renca',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			199 => 
			array (
				'codigo' => 'MU266',

				'nombre' => 'Municipalidad de Rengo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			200 => 
			array (
				'codigo' => 'MU267',

				'nombre' => 'Municipalidad de Requínoa',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			201 => 
			array (
				'codigo' => 'MU268',

				'nombre' => 'Municipalidad de Retiro',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			202 => 
			array (
				'codigo' => 'MU269',

				'nombre' => 'Municipalidad de Rinconada',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			203 => 
			array (
				'codigo' => 'MU270',

				'nombre' => 'Municipalidad de Rio Bueno',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			204 => 
			array (
				'codigo' => 'MU271',

				'nombre' => 'Municipalidad de Río Claro',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			205 => 
			array (
				'codigo' => 'MU272',

				'nombre' => 'Municipalidad de Río Hurtado',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			206 => 
			array (
				'codigo' => 'MU273',

				'nombre' => 'Municipalidad de Río Ibáñez',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			207 => 
			array (
				'codigo' => 'MU274',

				'nombre' => 'Municipalidad de Río Negro',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			208 => 
			array (
				'codigo' => 'MU275',

				'nombre' => 'Municipalidad de Río Verde',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			209 => 
			array (
				'codigo' => 'MU276',

				'nombre' => 'Municipalidad de Romeral',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			210 => 
			array (
				'codigo' => 'MU277',

				'nombre' => 'Municipalidad de Saavedra',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			211 => 
			array (
				'codigo' => 'MU278',

				'nombre' => 'Municipalidad de Sagrada Familia',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			212 => 
			array (
				'codigo' => 'MU279',

				'nombre' => 'Municipalidad de Salamanca',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			213 => 
			array (
				'codigo' => 'MU280',

				'nombre' => 'Municipalidad de San Antonio',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			214 => 
			array (
				'codigo' => 'MU281',

				'nombre' => 'Municipalidad de San Bernardo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			215 => 
			array (
				'codigo' => 'MU282',

				'nombre' => 'Municipalidad de San Carlos',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			216 => 
			array (
				'codigo' => 'MU283',

				'nombre' => 'Municipalidad de San Clemente',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			217 => 
			array (
				'codigo' => 'MU284',

				'nombre' => 'Municipalidad de San Esteban',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			218 => 
			array (
				'codigo' => 'MU285',

				'nombre' => 'Municipalidad de San Fabián',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			219 => 
			array (
				'codigo' => 'MU286',

				'nombre' => 'Municipalidad de San Felipe',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			220 => 
			array (
				'codigo' => 'MU287',

				'nombre' => 'Municipalidad de San Fernando',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			221 => 
			array (
				'codigo' => 'MU288',

				'nombre' => 'Municipalidad de San Gregorio',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			222 => 
			array (
				'codigo' => 'MU289',

				'nombre' => 'Municipalidad de San Ignacio',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			223 => 
			array (
				'codigo' => 'MU290',

				'nombre' => 'Municipalidad de San Javier',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			224 => 
			array (
				'codigo' => 'MU291',

				'nombre' => 'Municipalidad de San Joaquín',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			225 => 
			array (
				'codigo' => 'MU292',

				'nombre' => 'Municipalidad de San José de Maipo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			226 => 
			array (
				'codigo' => 'MU293',

				'nombre' => 'Municipalidad de San Juan de la Costa',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			227 => 
			array (
				'codigo' => 'MU294',

				'nombre' => 'Municipalidad de San Miguel',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			228 => 
			array (
				'codigo' => 'MU295',

				'nombre' => 'Municipalidad de San Nicolás',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			229 => 
			array (
				'codigo' => 'MU296',

				'nombre' => 'Municipalidad de San Pablo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			230 => 
			array (
				'codigo' => 'MU297',

				'nombre' => 'Municipalidad de San Pedro',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			231 => 
			array (
				'codigo' => 'MU298',

				'nombre' => 'Municipalidad de San Pedro de Atacama',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			232 => 
			array (
				'codigo' => 'MU299',

				'nombre' => 'Municipalidad de San Pedro De La Paz',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			233 => 
			array (
				'codigo' => 'MU300',

				'nombre' => 'Municipalidad de San Rafael',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			234 => 
			array (
				'codigo' => 'MU301',

				'nombre' => 'Municipalidad de San Ramón',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			235 => 
			array (
				'codigo' => 'MU302',

				'nombre' => 'Municipalidad de San Rosendo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			236 => 
			array (
				'codigo' => 'MU303',

				'nombre' => 'Municipalidad de San Vicente de Tagua Tagua',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			237 => 
			array (
				'codigo' => 'MU304',

				'nombre' => 'Municipalidad de Santa Bárbara',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			238 => 
			array (
				'codigo' => 'MU305',

				'nombre' => 'Municipalidad de Santa Cruz',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			239 => 
			array (
				'codigo' => 'MU306',

				'nombre' => 'Municipalidad de Santa Juana',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			240 => 
			array (
				'codigo' => 'MU307',

				'nombre' => 'Municipalidad de Santa María',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			241 => 
			array (
				'codigo' => 'MU308',

				'nombre' => 'Municipalidad de Santiago',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			242 => 
			array (
				'codigo' => 'MU309',

				'nombre' => 'Municipalidad de Santo Domingo',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			243 => 
			array (
				'codigo' => 'MU310',

				'nombre' => 'Municipalidad de Sierra Gorda',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			244 => 
			array (
				'codigo' => 'MU311',

				'nombre' => 'Municipalidad de Talagante',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			245 => 
			array (
				'codigo' => 'MU312',

				'nombre' => 'Municipalidad de Talca',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			246 => 
			array (
				'codigo' => 'MU313',

				'nombre' => 'Municipalidad de Talcahuano',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			247 => 
			array (
				'codigo' => 'MU314',

				'nombre' => 'Municipalidad de Taltal',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			248 => 
			array (
				'codigo' => 'MU315',

				'nombre' => 'Municipalidad de Temuco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			249 => 
			array (
				'codigo' => 'MU316',

				'nombre' => 'Municipalidad de Teno',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			250 => 
			array (
				'codigo' => 'MU317',

				'nombre' => 'Municipalidad de Teodoro Schmidt',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			251 => 
			array (
				'codigo' => 'MU318',

				'nombre' => 'Municipalidad de Tierra Amarilla',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			252 => 
			array (
				'codigo' => 'MU319',

				'nombre' => 'Municipalidad de Tiltil',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			253 => 
			array (
				'codigo' => 'MU320',

				'nombre' => 'Municipalidad de Timaukel',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			254 => 
			array (
				'codigo' => 'MU321',

				'nombre' => 'Municipalidad de Tirúa',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			255 => 
			array (
				'codigo' => 'MU322',

				'nombre' => 'Municipalidad de Tocopilla',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			256 => 
			array (
				'codigo' => 'MU323',

				'nombre' => 'Municipalidad de Toltén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			257 => 
			array (
				'codigo' => 'MU324',

				'nombre' => 'Municipalidad de Tome',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			258 => 
			array (
				'codigo' => 'MU325',

				'nombre' => 'Municipalidad de Torres del Paine',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			259 => 
			array (
				'codigo' => 'MU326',

				'nombre' => 'Municipalidad de Tortel',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			260 => 
			array (
				'codigo' => 'MU327',

				'nombre' => 'Municipalidad de Traiguén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			261 => 
			array (
				'codigo' => 'MU328',

				'nombre' => 'Municipalidad de Treguaco',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			262 => 
			array (
				'codigo' => 'MU329',

				'nombre' => 'Municipalidad de Tucapel',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			263 => 
			array (
				'codigo' => 'MU330',

				'nombre' => 'Municipalidad de Valdivia',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			264 => 
			array (
				'codigo' => 'MU331',

				'nombre' => 'Municipalidad de Vallenar',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			265 => 
			array (
				'codigo' => 'MU332',

				'nombre' => 'Municipalidad de Valparaíso',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			266 => 
			array (
				'codigo' => 'MU333',

				'nombre' => 'Municipalidad de Vichuquén',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			267 => 
			array (
				'codigo' => 'MU334',

				'nombre' => 'Municipalidad de Victoria',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			268 => 
			array (
				'codigo' => 'MU335',

				'nombre' => 'Municipalidad de Vicuña',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			269 => 
			array (
				'codigo' => 'MU336',

				'nombre' => 'Municipalidad de Vilcún',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			270 => 
			array (
				'codigo' => 'MU337',

				'nombre' => 'Municipalidad de Villa Alegre',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			271 => 
			array (
				'codigo' => 'MU338',

				'nombre' => 'Municipalidad de Villa Alemana',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			272 => 
			array (
				'codigo' => 'MU339',

				'nombre' => 'Municipalidad de Villarrica',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			273 => 
			array (
				'codigo' => 'MU340',

				'nombre' => 'Municipalidad de Viña del Mar',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			274 => 
			array (
				'codigo' => 'MU341',

				'nombre' => 'Municipalidad de Vitacura',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			275 => 
			array (
				'codigo' => 'MU342',

				'nombre' => 'Municipalidad de Yerbas Buenas',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			276 => 
			array (
				'codigo' => 'MU343',

				'nombre' => 'Municipalidad de Yumbel',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			277 => 
			array (
				'codigo' => 'MU344',

				'nombre' => 'Municipalidad de Yungay',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			278 => 
			array (
				'codigo' => 'MU345',

				'nombre' => 'Municipalidad de Zapallar',
				'codigo_padre' => 'MU',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			)*/

		));
	}

}
