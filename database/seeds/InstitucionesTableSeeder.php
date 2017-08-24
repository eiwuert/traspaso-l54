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
	
			),
			1 => 
			array (
				'codigo' => 'AB001',
				'nombre' => 'Subsecretaría del Interior',
				 
			),
			2 => 
			array (
				'codigo' => 'AB002',
				'nombre' => 'Subsecretaría de Desarrollo Regional',
				 
			),
			3 => 
			array (
				'codigo' => 'AB003',
				'nombre' => 'Agencia Nacional de Inteligencia',
				 
			),
			4 => 
			array (
				'codigo' => 'AB004',
				'nombre' => 'Oficina Nacional de Emergencia',
				 
			),
			5 => 
			array (
				'codigo' => 'AB005',
				'nombre' => 'Servicio de Gobierno Interior',
				 
			),
			6 => 
			array (
				'codigo' => 'AB006',
				'nombre' => 'Servicio Electoral',
				 
			),
			7 => 
			array (
				'codigo' => 'AB007',
				'nombre' => 'Intendencia Arica y Parinacota',
				 
			),
			8 => 
			array (
				'codigo' => 'AB008',
				'nombre' => 'Intendencia de Antofagasta',
				 
			),
			9 => 
			array (
				'codigo' => 'AB009',
				'nombre' => 'Intendencia de Atacama',
				 
			),
			10 => 
			array (
				'codigo' => 'AB010',
				'nombre' => 'Intendencia de Aysén',
				 
			),
			11 => 
			array (
				'codigo' => 'AB011',
				'nombre' => 'Intendencia de Coquimbo',
				 
			),
			12 => 
			array (
				'codigo' => 'AB012',
				'nombre' => 'Intendencia de la Araucanía',
				 
			),
			13 => 
			array (
				'codigo' => 'AB013',
				'nombre' => 'Intendencia de Los Lagos',
				 
			),
			14 => 
			array (
				'codigo' => 'AB014',
				'nombre' => 'Intendencia de Los Ríos',
				 
			),
			15 => 
			array (
				'codigo' => 'AB015',
				'nombre' => 'Intendencia de Magallanes',
				 
			),
			16 => 
			array (
				'codigo' => 'AB016',
				'nombre' => 'Intendencia de O’Higgins',
				 
			),
			17 => 
			array (
				'codigo' => 'AB017',
				'nombre' => 'Intendencia de Tarapacá',
				 
			),
			18 => 
			array (
				'codigo' => 'AB018',
				'nombre' => 'Intendencia de Valparaíso',
				 
			),
			19 => 
			array (
				'codigo' => 'AB019',
				'nombre' => 'Intendencia del Bío Bío',
				 
			),
			20 => 
			array (
				'codigo' => 'AB020',
				'nombre' => 'Intendencia del Maule',
				 
			),
			21 => 
			array (
				'codigo' => 'AB021',
				'nombre' => 'Intendencia Metropolitana',
				 
			),
			22 => 
			array (
				'codigo' => 'AB022',
				'nombre' => 'Gobernación de Arica',
				 
			),
			23 => 
			array (
				'codigo' => 'AB023',
				'nombre' => 'Gobernación de Parinacota',
				 
			),
			24 => 
			array (
				'codigo' => 'AB024',
				'nombre' => 'Gobernación de Iquique',
				 
			),
			25 => 
			array (
				'codigo' => 'AB025',
				'nombre' => 'Gobernación de Tamarugal',
				 
			),
			26 => 
			array (
				'codigo' => 'AB026',
				'nombre' => 'Gobernación de Antofagasta',
				 
			),
			27 => 
			array (
				'codigo' => 'AB027',
				'nombre' => 'Gobernación de El Loa',
				 
			),
			28 => 
			array (
				'codigo' => 'AB028',
				'nombre' => 'Gobernación de Tocopilla',
				 
			),
			29 => 
			array (
				'codigo' => 'AB029',
				'nombre' => 'Gobernación de Chañaral',
				 
			),
			30 => 
			array (
				'codigo' => 'AB030',
				'nombre' => 'Gobernación de Copiapó',
				 
			),
			31 => 
			array (
				'codigo' => 'AB031',
				'nombre' => 'Gobernación de Huasco',
				 
			),
			32 => 
			array (
				'codigo' => 'AB032',
				'nombre' => 'Gobernación de Elqui',
				 
			),
			33 => 
			array (
				'codigo' => 'AB033',
				'nombre' => 'Gobernación de Limarí',
				 
			),
			34 => 
			array (
				'codigo' => 'AB034',
				'nombre' => 'Gobernación de Choapa',
				 
			),
			35 => 
			array (
				'codigo' => 'AB035',
				'nombre' => 'Gobernación de Petorca',
				 
			),
			36 => 
			array (
				'codigo' => 'AB036',
				'nombre' => 'Gobernación de Valparaíso',
				 
			),
			37 => 
			array (
				'codigo' => 'AB037',
				'nombre' => 'Gobernación de San Felipe',
				 
			),
			38 => 
			array (
				'codigo' => 'AB038',
				'nombre' => 'Gobernación de Los Andes',
				 
			),
			39 => 
			array (
				'codigo' => 'AB039',
				'nombre' => 'Gobernación de Quillota',
				 
			),
			40 => 
			array (
				'codigo' => 'AB040',
				'nombre' => 'Gobernación de San Antonio',
				 
			),
			41 => 
			array (
				'codigo' => 'AB041',
				'nombre' => 'Gobernación de Isla de Pascua',
				 
			),
			42 => 
			array (
				'codigo' => 'AB042',
				'nombre' => 'Gobernación de Cachapoal',
				 
			),
			43 => 
			array (
				'codigo' => 'AB043',
				'nombre' => 'Gobernación de Colchagua',
				 
			),
			44 => 
			array (
				'codigo' => 'AB044',
				'nombre' => 'Gobernación de Cardenal Caro',
				 
			),
			45 => 
			array (
				'codigo' => 'AB045',
				'nombre' => 'Gobernación de Curicó',
				 
			),
			46 => 
			array (
				'codigo' => 'AB046',
				'nombre' => 'Gobernación de Talca',
				 
			),
			47 => 
			array (
				'codigo' => 'AB047',
				'nombre' => 'Gobernación de Linares',
				 
			),
			48 => 
			array (
				'codigo' => 'AB048',
				'nombre' => 'Gobernación de Cauquenes',
				 
			),
			49 => 
			array (
				'codigo' => 'AB049',
				'nombre' => 'Gobernación de Ñuble',
				 
			),
			50 => 
			array (
				'codigo' => 'AB050',
				'nombre' => 'Gobernación de Bío Bío',
				 
			)
			/*,
			51 => 
			array (
				'codigo' => 'AB051',
				'nombre' => 'Gobernación de Concepción',
				 
			),
			52 => 
			array (
				'codigo' => 'AB052',
				'nombre' => 'Gobernación de Arauco',
				 
			),
			53 => 
			array (
				'codigo' => 'AB053',
				'nombre' => 'Gobernación de Malleco',
				 
			),
			54 => 
			array (
				'codigo' => 'AB054',
				'nombre' => 'Gobernación de Cautín',
				 
			),
			55 => 
			array (
				'codigo' => 'AB055',
				'nombre' => 'Gobernación de Valdivia',
				 
			),
			56 => 
			array (
				'codigo' => 'AB056',
				'nombre' => 'Gobernación de Ranco',
				 
			),
			57 => 
			array (
				'codigo' => 'AB057',
				'nombre' => 'Gobernación de Osorno',
				 
			),
			58 => 
			array (
				'codigo' => 'AB058',
				'nombre' => 'Gobernación de Llanquihue',
				 
			),
			59 => 
			array (
				'codigo' => 'AB059',
				'nombre' => 'Gobernación de Chiloé',
				 
			),
			60 => 
			array (
				'codigo' => 'AB060',
				'nombre' => 'Gobernación de Palena',
				 
			),
			61 => 
			array (
				'codigo' => 'AB061',
				'nombre' => 'Gobernación de Coyhaique',
				 
			),
			62 => 
			array (
				'codigo' => 'AB062',
				'nombre' => 'Gobernación de Puerto Aysén',
				 
			),
			63 => 
			array (
				'codigo' => 'AB063',
				'nombre' => 'Gobernación de General Carrera',
				 
			),
			64 => 
			array (
				'codigo' => 'AB064',
				'nombre' => 'Gobernación de Capitán Prat',
				 
			),
			65 => 
			array (
				'codigo' => 'AB065',
				'nombre' => 'Gobernación de Última Esperanza',
				 
			),
			66 => 
			array (
				'codigo' => 'AB066',
				'nombre' => 'Gobernación de Magallanes',
				 
			),
			67 => 
			array (
				'codigo' => 'AB067',
				'nombre' => 'Gobernación de Tierra del Fuego',
				 
			),
			68 => 
			array (
				'codigo' => 'AB068',
				'nombre' => 'Gobernación de la Antártica Chilena',
				 
			),
			69 => 
			array (
				'codigo' => 'AB069',
				'nombre' => 'Gobernación de Chacabuco',
				 
			),
			70 => 
			array (
				'codigo' => 'AB070',
				'nombre' => 'Gobernación de Cordillera',
				 
			),
			71 => 
			array (
				'codigo' => 'AB071',
				'nombre' => 'Gobernación de Maipo',
				 
			),
			72 => 
			array (
				'codigo' => 'AB072',
				'nombre' => 'Gobernación de Talagante',
				 
			),
			73 => 
			array (
				'codigo' => 'AB073',
				'nombre' => 'Gobernación de Melipilla',
				 
			),
			74 => 
			array (
				'codigo' => 'AB075',
				'nombre' => 'Gobierno Regional de Arica y Parinacota',
				 
			),
			75 => 
			array (
				'codigo' => 'AB076',
				'nombre' => 'Gobierno Regional de Tarapacá',
				 
			),
			76 => 
			array (
				'codigo' => 'AB077',
				'nombre' => 'Gobierno Regional de Antofagasta',
				 
			),
			77 => 
			array (
				'codigo' => 'AB078',
				'nombre' => 'Gobierno Regional de Atacama',
				 
			),
			78 => 
			array (
				'codigo' => 'AB079',
				'nombre' => 'Gobierno Regional de Coquimbo',
				'codigo_padre' => 'AB',
				 
			),
			79 => 
			array (
				'codigo' => 'AB080',
				'nombre' => 'Gobierno Regional de Valparaíso',
				 
			),
			80 => 
			array (
				'codigo' => 'AB081',
				'nombre' => 'Gobierno Regional Metropolitano de Santiago',
				 
			)/*
			83 => 
			array (
				'codigo' => 'AB082',

				'nombre' => 'Gobierno Regional de O´Higgins',
				'codigo_padre' => 'AB',
				 
			),
			84 => 
			array (
				'codigo' => 'AB083',

				'nombre' => 'Gobierno Regional del Maule',
				'codigo_padre' => 'AB',
				 
			),
			85 => 
			array (
				'codigo' => 'AB084',

				'nombre' => 'Gobierno Regional del Bío Bío',
				'codigo_padre' => 'AB',
				 
			),
			86 => 
			array (
				'codigo' => 'AB085',

				'nombre' => 'Gobierno Regional de La Araucanía',
				'codigo_padre' => 'AB',
				 
			),
			87 => 
			array (
				'codigo' => 'AB086',

				'nombre' => 'Gobierno Regional de Los Ríos',
				'codigo_padre' => 'AB',
				 
			),
			88 => 
			array (
				'codigo' => 'AB087',

				'nombre' => 'Gobierno Regional de Los Lagos',
				'codigo_padre' => 'AB',
				 
			),
			89 => 
			array (
				'codigo' => 'AB088',

				'nombre' => 'Gobierno Regional de Aysén',
				'codigo_padre' => 'AB',
				 
			),
			90 => 
			array (
				'codigo' => 'AB089',

				'nombre' => 'Gobierno Regional de Magallanes y Antártica Chilena ',
				'codigo_padre' => 'AB',
				 
			),
			91 => 
			array (
				'codigo' => 'AB090',

				'nombre' => 'Gobernación de Marga Marga',
				'codigo_padre' => 'AB',
				 
			),
			92 => 
			array (
				'codigo' => 'AB091',

				'nombre' => 'Subsecretaría de Prevención del Delito',
				'codigo_padre' => 'AB',
				 
			),
			93 => 
			array (
				'codigo' => 'AB092',

				'nombre' => 'Servicio Nacional de Prevención y Rehabilitación del Consumo de Drogas y Alcohol',
				'codigo_padre' => 'AB',
				 
			),
			94 => 
			array (
				'codigo' => 'AB999',

				'nombre' => 'Departamento de Extranjería y Migración',
				'codigo_padre' => 'AB',
				 
			),
			96 => 
			array (
				'codigo' => 'AC001',

				'nombre' => 'Subsecretaría de Relaciones Exteriores',
				'codigo_padre' => 'AC',
				 
			),
			97 => 
			array (
				'codigo' => 'AC002',

				'nombre' => 'Dirección General de Relaciones Económicas Internacionales',
				'codigo_padre' => 'AC',
				 
			),
			98 => 
			array (
				'codigo' => 'AC003',

				'nombre' => 'Dirección Nacional de Fronteras y Límites del Estado',
				'codigo_padre' => 'AC',
				 
			),
			99 => 
			array (
				'codigo' => 'AC004',

				'nombre' => 'Agencia de Cooperación Internacional',
				'codigo_padre' => 'AC',
				 
			),
			100 => 
			array (
				'codigo' => 'AC005',

				'nombre' => 'Instituto Antártico Chileno',
				'codigo_padre' => 'AC',
				 
			),

			102 => 
			array (
				'codigo' => 'AD006',

				'nombre' => 'Ejército de Chile',
				'codigo_padre' => 'AD',
				 
			),
			103 => 
			array (
				'codigo' => 'AD007',

				'nombre' => 'Armada de Chile',
				'codigo_padre' => 'AD',
				 
			),
			104 => 
			array (
				'codigo' => 'AD008',

				'nombre' => 'Fuerza Aérea de Chile',
				'codigo_padre' => 'AD',
				 
			),
			105 => 
			array (
				'codigo' => 'AD009',

				'nombre' => 'Carabineros de Chile',
				'codigo_padre' => 'AB',
				 
			),
			106 => 
			array (
				'codigo' => 'AD010',

				'nombre' => 'Policía de Investigaciones',
				'codigo_padre' => 'AB',
				 
			),
			107 => 
			array (
				'codigo' => 'AD011',

				'nombre' => 'Dirección Administrativa',
				'codigo_padre' => 'AD',
				 
			),
			108 => 
			array (
				'codigo' => 'AD012',

				'nombre' => 'Defensa Civil de Chile',
				'codigo_padre' => 'AD',
				 
			),
			109 => 
			array (
				'codigo' => 'AD013',

				'nombre' => 'Dirección General de Movilización Nacional',
				'codigo_padre' => 'AD',
				 
			),
			110 => 
			array (
				'codigo' => 'AD014',

				'nombre' => 'Dirección General del Territorio Marítimo y Marina Mercante',
				'codigo_padre' => 'AD',
				 
			),
			111 => 
			array (
				'codigo' => 'AD015',

				'nombre' => 'Caja de Previsión de la Defensa Nacional',
				'codigo_padre' => 'AD',
				 
			),
			112 => 
			array (
				'codigo' => 'AD016',

				'nombre' => 'Dirección de Previsión de Carabineros de Chile',
				'codigo_padre' => 'AB',
				 
			),
			113 => 
			array (
				'codigo' => 'AD017',

				'nombre' => 'Instituto Geográfico Militar',
				'codigo_padre' => 'AD',
				 
			),
			114 => 
			array (
				'codigo' => 'AD018',

				'nombre' => 'Servicio Aerofotogramétrico FACh',
				'codigo_padre' => 'AD',
				 
			),
			115 => 
			array (
				'codigo' => 'AD019',

				'nombre' => 'Servicio Hidrográfico y Oceanográfico de la Armada',
				'codigo_padre' => 'AD',
				 
			),
			116 => 
			array (
				'codigo' => 'AD020',

				'nombre' => 'Dirección General de Aeronáutica Civil',
				'codigo_padre' => 'AD',
				 
			),
			117 => 
			array (
				'codigo' => 'AD021',

				'nombre' => 'Subsecretaría de Defensa',
				'codigo_padre' => 'AD',
				 
			),
			118 => 
			array (
				'codigo' => 'AD022',

				'nombre' => 'Subsecretaría para las Fuerzas Armadas',
				'codigo_padre' => 'AD',
				 
			),
			119 => 
			array (
				'codigo' => 'AD023',

				'nombre' => 'Estado Mayor Conjunto ',
				'codigo_padre' => 'AD',
				 
			),

			121 => 
			array (
				'codigo' => 'AE001',

				'nombre' => 'Subsecretaría de Hacienda ',
				'codigo_padre' => 'AE',
				 
			),
			122 => 
			array (
				'codigo' => 'AE002',

				'nombre' => 'Dirección de Presupuestos',
				'codigo_padre' => 'AE',
				 
			),
			123 => 
			array (
				'codigo' => 'AE003',

				'nombre' => 'Tesorería General de la República',
				'codigo_padre' => 'AE',
				 
			),
			124 => 
			array (
				'codigo' => 'AE004',

				'nombre' => 'Dirección Nacional del Servicio Civil',
				'codigo_padre' => 'AE',
				 
			),
			125 => 
			array (
				'codigo' => 'AE005',

				'nombre' => 'Unidad de Análisis Financiero',
				'codigo_padre' => 'AE',
				 
			),
			126 => 
			array (
				'codigo' => 'AE006',

				'nombre' => 'Servicio de Impuestos Internos',
				'codigo_padre' => 'AE',
				 
			),
			127 => 
			array (
				'codigo' => 'AE007',

				'nombre' => 'Servicio Nacional de Aduanas',
				'codigo_padre' => 'AE',
				 
			),
			128 => 
			array (
				'codigo' => 'AE008',

				'nombre' => 'Superintendencia de Bancos e Instituciones Financieras',
				'codigo_padre' => 'AE',
				 
			),
			129 => 
			array (
				'codigo' => 'AE009',

				'nombre' => 'Superintendencia de Valores y Seguros',
				'codigo_padre' => 'AE',
				 
			),
			130 => 
			array (
				'codigo' => 'AE011',

				'nombre' => 'Dirección de Compras y Contratación Pública',
				'codigo_padre' => 'AE',
				 
			),
			131 => 
			array (
				'codigo' => 'AE012',

				'nombre' => 'Superintendencia de Casinos de Juego',
				'codigo_padre' => 'AE',
				 
			),

			133 => 
			array (
				'codigo' => 'AF001',

				'nombre' => 'Subsecretaría General de la Presidencia',
				'codigo_padre' => 'AF',
				 
			),
			135 => 
			array (
				'codigo' => 'AG001',

				'nombre' => 'Subsecretaría General de Gobierno',
				'codigo_padre' => 'AG',
				 
			),
			136 => 
			array (
				'codigo' => 'AG002',

				'nombre' => 'Instituto Nacional del Deporte',
				'codigo_padre' => 'AY',
				 
			),
			137 => 
			array (
				'codigo' => 'AG003',

				'nombre' => 'Consejo Nacional de Televisión',
				'codigo_padre' => 'AG',
				 
			),
			139 => 
			array (
				'codigo' => 'AH001',

				'nombre' => 'Subsecretaría de Economía y Empresa de Menor Tamaño',
				'codigo_padre' => 'AH',
				 
			),
			140 => 
			array (
				'codigo' => 'AH002',

				'nombre' => 'Subsecretaría de Pesca',
				'codigo_padre' => 'AH',
				 
			),
			141 => 
			array (
				'codigo' => 'AH003',

				'nombre' => 'Comité de Inversiones Extranjeras',
				'codigo_padre' => 'AH',
				 
			),
			142 => 
			array (
				'codigo' => 'AH004',

				'nombre' => 'Corporación de Fomento de la Producción',
				'codigo_padre' => 'AH',
				 
			),
			143 => 
			array (
				'codigo' => 'AH005',

				'nombre' => 'Fiscalía Nacional Económica',
				'codigo_padre' => 'AH',
				 
			),
			144 => 
			array (
				'codigo' => 'AH007',

				'nombre' => 'Instituto Nacional de Estadísticas',
				'codigo_padre' => 'AH',
				 
			),
			145 => 
			array (
				'codigo' => 'AH008',

				'nombre' => 'Servicio Nacional de Turismo',
				'codigo_padre' => 'AH',
				 
			),
			146 => 
			array (
				'codigo' => 'AH009',

				'nombre' => 'Servicio Nacional del Consumidor',
				'codigo_padre' => 'AH',
				 
			),
			147 => 
			array (
				'codigo' => 'AH010',

				'nombre' => 'Servicio Nacional de Pesca',
				'codigo_padre' => 'AH',
				 
			),
			148 => 
			array (
				'codigo' => 'AH011',

				'nombre' => 'Subsecretaría de Turismo',
				'codigo_padre' => 'AH',
				 
			),
			149 => 
			array (
				'codigo' => 'AH012',

				'nombre' => 'Servicio de Cooperación Técnica ',
				'codigo_padre' => 'AH',
				 
			),
			150 => 
			array (
				'codigo' => 'AH999',

				'nombre' => 'Comité Innova Bío Bío',
				'codigo_padre' => 'AH',
				 
			),
			152 => 
			array (
				'codigo' => 'AI001',

				'nombre' => 'Subsecretaría de Planificación',
				'codigo_padre' => 'AI',
				 
			),
			153 => 
			array (
				'codigo' => 'AI002',

				'nombre' => 'Corporación Nacional de Desarrollo Indígena',
				'codigo_padre' => 'AI',
				 
			),
			154 => 
			array (
				'codigo' => 'AI003',

				'nombre' => 'Servicio Nacional de la Discapacidad',
				'codigo_padre' => 'AI',
				 
			),
			155 => 
			array (
				'codigo' => 'AI004',

				'nombre' => 'Fondo de Solidaridad e Inversión Social',
				'codigo_padre' => 'AI',
				 
			),
			156 => 
			array (
				'codigo' => 'AI005',

				'nombre' => 'Instituto Nacional de la Juventud',
				'codigo_padre' => 'AI',
				 
			),
			157 => 
			array (
				'codigo' => 'AI006',

				'nombre' => 'Servicio Nacional del Adulto Mayor',
				'codigo_padre' => 'AI',
				 
			),
			158 => 
			array (
				'codigo' => 'AI007',

				'nombre' => 'Subsecretaría de Evaluación Social',
				'codigo_padre' => 'AI',
				 
			),
			159 => 
			array (
				'codigo' => 'AI008',

				'nombre' => 'Subsecretaría de Servicios Sociales',
				'codigo_padre' => 'AI',
				 
			),
			161 => 
			array (
				'codigo' => 'AJ001',

				'nombre' => 'Subsecretaría de Educación',
				'codigo_padre' => 'AJ',
				 
			),
			162 => 
			array (
				'codigo' => 'AJ002',

				'nombre' => 'Consejo de Rectores de las Universidades Chilenas',
				'codigo_padre' => 'AJ',
				 
			),
			163 => 
			array (
				'codigo' => 'AJ003',

				'nombre' => 'Agencia de Calidad de la Educación',
				'codigo_padre' => 'AJ',
				 
			),
			164 => 
			array (
				'codigo' => 'AJ004',

			'nombre' => 'Comisión Administradora del Sistema de Créditos para Estudios Superiores (Comisión Ingresa)',
				'codigo_padre' => 'AJ',
				 
			),
			165 => 
			array (
				'codigo' => 'AJ005',

				'nombre' => 'Dirección de Bibliotecas, Archivos y Museos',
				'codigo_padre' => 'AJ',
				 
			),
			166 => 
			array (
				'codigo' => 'AJ007',

				'nombre' => 'Consejo de Calificación Cinematográfica',
				'codigo_padre' => 'AJ',
				 
			),
			167 => 
			array (
				'codigo' => 'AJ008',

				'nombre' => 'Comisión Nacional de Investigación Científica y Tecnológica',
				'codigo_padre' => 'AJ',
				 
			),
			168 => 
			array (
				'codigo' => 'AJ009',

				'nombre' => 'Junta Nacional de Auxilio Escolar y Becas',
				'codigo_padre' => 'AJ',
				 
			),
			169 => 
			array (
				'codigo' => 'AJ010',

				'nombre' => 'Junta Nacional de Jardines Infantiles',
				'codigo_padre' => 'AJ',
				 
			),
			170 => 
			array (
				'codigo' => 'AJ011',

				'nombre' => 'Consejo de Monumentos Nacionales',
				'codigo_padre' => 'AJ',
				 
			),
			171 => 
			array (
				'codigo' => 'AJ012',

				'nombre' => 'Consejo Nacional de Educación',
				'codigo_padre' => 'AJ',
				 
			),
			172 => 
			array (
				'codigo' => 'AJ013',

				'nombre' => 'Superintendencia de Educación',
				'codigo_padre' => 'AJ',
				 
			),
			174 => 
			array (
				'codigo' => 'AK001',

				'nombre' => 'Subsecretaría de Justicia',
				'codigo_padre' => 'AK',
				 
			),
			175 => 
			array (
				'codigo' => 'AK002',

				'nombre' => 'Servicio de Registro Civil e Identificación',
				'codigo_padre' => 'AK',
				 
			),
			176 => 
			array (
				'codigo' => 'AK003',

				'nombre' => 'Servicio Médico Legal',
				'codigo_padre' => 'AK',
				 
			),
			177 => 
			array (
				'codigo' => 'AK004',

				'nombre' => 'Servicio Nacional de Menores',
				'codigo_padre' => 'AK',
				 
			),
			178 => 
			array (
				'codigo' => 'AK005',

				'nombre' => 'Defensoría Penal Pública',
				'codigo_padre' => 'AK',
				 
			),
			179 => 
			array (
				'codigo' => 'AK006',

				'nombre' => 'Gendarmería de Chile',
				'codigo_padre' => 'AK',
				 
			),
			180 => 
			array (
				'codigo' => 'AK007',

				'nombre' => 'Superintendencia de Insolvencia y Reemprendimiento',
				'codigo_padre' => 'AH',
				 
			),
			181 => 
			array (
				'codigo' => 'AK008',

				'nombre' => 'Corporación de Asistencia Judicial Región Metropolitana',
				'codigo_padre' => 'AK',
				 
			),
			182 => 
			array (
				'codigo' => 'AK009',

				'nombre' => 'Corporación de Asistencia Judicial Región Valparaíso',
				'codigo_padre' => 'AK',
				 
			),
			183 => 
			array (
				'codigo' => 'AK010',

				'nombre' => 'Corporación de Asistencia Judicial Regiones Tarapacá y Antofagasta',
				'codigo_padre' => 'AK',
				 
			),
			184 => 
			array (
				'codigo' => 'AK011',

				'nombre' => 'Corporación de Asistencia Judicial Región Bío Bío',
				'codigo_padre' => 'AK',
				 
			),
			186 => 
			array (
				'codigo' => 'AL001',

				'nombre' => 'Subsecretaría del Trabajo',
				'codigo_padre' => 'AL',
				 
			),
			187 => 
			array (
				'codigo' => 'AL002',

				'nombre' => 'Subsecretaría de Previsión Social',
				'codigo_padre' => 'AL',
				 
			),
			188 => 
			array (
				'codigo' => 'AL003',

				'nombre' => 'Dirección del Trabajo',
				'codigo_padre' => 'AL',
				 
			),
			189 => 
			array (
				'codigo' => 'AL004',

				'nombre' => 'Dirección General de Crédito Prendario',
				'codigo_padre' => 'AL',
				 
			),
			190 => 
			array (
				'codigo' => 'AL005',

				'nombre' => 'Instituto de Previsión Social',
				'codigo_padre' => 'AL',
				 
			),
			191 => 
			array (
				'codigo' => 'AL006',

				'nombre' => 'Instituto de Seguridad Laboral',
				'codigo_padre' => 'AL',
				 
			),
			192 => 
			array (
				'codigo' => 'AL007',

				'nombre' => 'Servicio Nacional de Capacitación y Empleo',
				'codigo_padre' => 'AL',
				 
			),
			193 => 
			array (
				'codigo' => 'AL008',

				'nombre' => 'Superintendencia de Pensiones',
				'codigo_padre' => 'AL',
				 
			),
			194 => 
			array (
				'codigo' => 'AL009',

				'nombre' => 'Superintendencia de Seguridad Social',
				'codigo_padre' => 'AL',
				 
			),
			195 => 
			array (
				'codigo' => 'AL010',

				'nombre' => 'Comisión del Sistema Nacional de Certificación de Competencias Laborales',
				'codigo_padre' => 'AL',
				 
			),
			197 => 
			array (
				'codigo' => 'AM001',

				'nombre' => 'Subsecretaría de Obras Públicas',
				'codigo_padre' => 'AM',
				 
			),
			198 => 
			array (
				'codigo' => 'AM002',

				'nombre' => 'Dirección General de Obras Públicas',
				'codigo_padre' => 'AM',
				 
			),
			199 => 
			array (
				'codigo' => 'AM003',

				'nombre' => 'Dirección de Contabilidad y Finanzas',
				'codigo_padre' => 'AM',
				 
			),
			200 => 
			array (
				'codigo' => 'AM004',

				'nombre' => 'Dirección de Aeropuertos',
				'codigo_padre' => 'AM',
				 
			),
			201 => 
			array (
				'codigo' => 'AM005',

				'nombre' => 'Dirección de Arquitectura',
				'codigo_padre' => 'AM',
				 
			),
			202 => 
			array (
				'codigo' => 'AM006',

				'nombre' => 'Dirección General de Aguas',
				'codigo_padre' => 'AM',
				 
			),
			203 => 
			array (
				'codigo' => 'AM007',

				'nombre' => 'Dirección de Obras Hidráulicas',
				'codigo_padre' => 'AM',
				 
			),
			204 => 
			array (
				'codigo' => 'AM008',

				'nombre' => 'Dirección de Obras Portuarias',
				'codigo_padre' => 'AM',
				 
			),
			205 => 
			array (
				'codigo' => 'AM009',

				'nombre' => 'Dirección de Planeamiento ',
				'codigo_padre' => 'AM',
				 
			),
			206 => 
			array (
				'codigo' => 'AM010',

				'nombre' => 'Dirección de Vialidad',
				'codigo_padre' => 'AM',
				 
			),
			207 => 
			array (
				'codigo' => 'AM011',

				'nombre' => 'Superintendencia de Servicios Sanitarios',
				'codigo_padre' => 'AM',
				 
			),
			208 => 
			array (
				'codigo' => 'AM012',

				'nombre' => 'Instituto Nacional de Hidráulica',
				'codigo_padre' => 'AM',
				 
			),
			209 => 
			array (
				'codigo' => 'AM013',

				'nombre' => 'Fiscalía Ministerio de Obras Públicas',
				'codigo_padre' => 'AM',
				 
			),
			210 => 
			array (
				'codigo' => 'AM014',

				'nombre' => 'Coordinación de Concesiones de Obras Públicas',
				'codigo_padre' => 'AM',
				 
			),
			212 => 
			array (
				'codigo' => 'AN001',

				'nombre' => 'Subsecretaría de Transportes',
				'codigo_padre' => 'AN',
				 
			),
			213 => 
			array (
				'codigo' => 'AN002',

				'nombre' => 'Subsecretaría de Telecomunicaciones',
				'codigo_padre' => 'AN',
				 
			),
			214 => 
			array (
				'codigo' => 'AN003',

				'nombre' => 'Junta de Aeronáutica Civil',
				'codigo_padre' => 'AN',
				 
			),
			215 => 
			array (
				'codigo' => 'AN998',

				'nombre' => 'Centro de Control y Certificación Vehicular',
				'codigo_padre' => 'AN',
				 
			),
			216 => 
			array (
				'codigo' => 'AN999',

				'nombre' => 'Unidad Operativa de Control de Tránsito',
				'codigo_padre' => 'AN',
				 
			),
			218 => 
			array (
				'codigo' => 'AO001',

				'nombre' => 'Subsecretaría de Salud Pública',
				'codigo_padre' => 'AO',
				 
			),
			219 => 
			array (
				'codigo' => 'AO002',

				'nombre' => 'Subsecretaría de Redes Asistenciales',
				'codigo_padre' => 'AO',
				 
			),
			220 => 
			array (
				'codigo' => 'AO003',

				'nombre' => 'Central de Abastecimiento del Sistema Nacional de Servicios de Salud',
				'codigo_padre' => 'AO',
				 
			),
			221 => 
			array (
				'codigo' => 'AO004',

				'nombre' => 'Fondo Nacional de Salud',
				'codigo_padre' => 'AO',
				 
			),
			222 => 
			array (
				'codigo' => 'AO005',

				'nombre' => 'Instituto de Salud Pública',
				'codigo_padre' => 'AO',
				 
			),
			223 => 
			array (
				'codigo' => 'AO006',

				'nombre' => 'Superintendencia de Salud',
				'codigo_padre' => 'AO',
				 
			),
			224 => 
			array (
				'codigo' => 'AO007',

				'nombre' => 'Servicio de Salud Metropolitano Central',
				'codigo_padre' => 'AO',
				 
			),
			225 => 
			array (
				'codigo' => 'AO008',

				'nombre' => 'Servicio de Salud Metropolitano Norte',
				'codigo_padre' => 'AO',
				 
			),
			226 => 
			array (
				'codigo' => 'AO009',

				'nombre' => 'Servicio de Salud Metropolitano Occidente',
				'codigo_padre' => 'AO',
				 
			),
			227 => 
			array (
				'codigo' => 'AO010',

				'nombre' => 'Servicio de Salud Metropolitano Oriente',
				'codigo_padre' => 'AO',
				 
			),
			228 => 
			array (
				'codigo' => 'AO011',

				'nombre' => 'Servicio de Salud Metropolitano Sur',
				'codigo_padre' => 'AO',
				 
			),
			229 => 
			array (
				'codigo' => 'AO012',

				'nombre' => 'Servicio de Salud Metropolitano Sur Oriente',
				'codigo_padre' => 'AO',
				 
			),
			230 => 
			array (
				'codigo' => 'AO013',

				'nombre' => 'Hospital Padre Hurtado',
				'codigo_padre' => 'AO',
				 
			),
			231 => 
			array (
				'codigo' => 'AO014',

				'nombre' => 'Centro de Referencia de Salud de Peñalolén Cordillera Oriente',
				'codigo_padre' => 'AO',
				 
			),
			232 => 
			array (
				'codigo' => 'AO015',

				'nombre' => 'Centro de Referencia de Salud de Maipú',
				'codigo_padre' => 'AO',
				 
			),
			233 => 
			array (
				'codigo' => 'AO016',

				'nombre' => 'Servicio de Salud Arica',
				'codigo_padre' => 'AO',
				 
			),
			234 => 
			array (
				'codigo' => 'AO017',

				'nombre' => 'Servicio de Salud Iquique',
				'codigo_padre' => 'AO',
				 
			),
			235 => 
			array (
				'codigo' => 'AO018',

				'nombre' => 'Servicio de Salud Antofagasta',
				'codigo_padre' => 'AO',
				 
			),
			236 => 
			array (
				'codigo' => 'AO019',

				'nombre' => 'Servicio de Salud Atacama',
				'codigo_padre' => 'AO',
				 
			),
			237 => 
			array (
				'codigo' => 'AO020',

				'nombre' => 'Servicio de Salud Coquimbo',
				'codigo_padre' => 'AO',
				 
			),
			238 => 
			array (
				'codigo' => 'AO021',

				'nombre' => 'Servicio de Salud Aconcagua',
				'codigo_padre' => 'AO',
				 
			),
			239 => 
			array (
				'codigo' => 'AO022',

				'nombre' => 'Servicio de Salud Valparaíso - San Antonio',
				'codigo_padre' => 'AO',
				 
			),
			240 => 
			array (
				'codigo' => 'AO023',

				'nombre' => 'Servicio de Salud Viña Del Mar - Quillota',
				'codigo_padre' => 'AO',
				 
			),
			241 => 
			array (
				'codigo' => 'AO024',

				'nombre' => 'Servicio de Salud O´Higgins',
				'codigo_padre' => 'AO',
				 
			),
			242 => 
			array (
				'codigo' => 'AO025',

				'nombre' => 'Servicio de Salud Maule',
				'codigo_padre' => 'AO',
				 
			),
			243 => 
			array (
				'codigo' => 'AO026',

				'nombre' => 'Servicio de Salud Ñuble',
				'codigo_padre' => 'AO',
				 
			),
			244 => 
			array (
				'codigo' => 'AO027',

				'nombre' => 'Servicio de Salud Concepción',
				'codigo_padre' => 'AO',
				 
			),
			245 => 
			array (
				'codigo' => 'AO028',

				'nombre' => 'Servicio de Salud Talcahuano',
				'codigo_padre' => 'AO',
				 
			),
			246 => 
			array (
				'codigo' => 'AO029',

				'nombre' => 'Servicio de Salud Bío Bío',
				'codigo_padre' => 'AO',
				 
			),
			247 => 
			array (
				'codigo' => 'AO030',

				'nombre' => 'Servicio de Salud Arauco',
				'codigo_padre' => 'AO',
				 
			),
			248 => 
			array (
				'codigo' => 'AO031',

				'nombre' => 'Servicio de Salud Araucanía Norte',
				'codigo_padre' => 'AO',
				 
			),
			249 => 
			array (
				'codigo' => 'AO032',

				'nombre' => 'Servicio de Salud Araucanía Sur',
				'codigo_padre' => 'AO',
				 
			),
			250 => 
			array (
				'codigo' => 'AO033',

				'nombre' => 'Servicio de Salud Valdivia',
				'codigo_padre' => 'AO',
				 
			),
			251 => 
			array (
				'codigo' => 'AO034',

				'nombre' => 'Servicio de Salud Osorno',
				'codigo_padre' => 'AO',
				 
			),
			252 => 
			array (
				'codigo' => 'AO035',

				'nombre' => 'Servicio de Salud de Chiloé',
				'codigo_padre' => 'AO',
				 
			),
			253 => 
			array (
				'codigo' => 'AO036',

				'nombre' => 'Servicio de Salud Aysén',
				'codigo_padre' => 'AO',
				 
			),
			254 => 
			array (
				'codigo' => 'AO037',

				'nombre' => 'Servicio de Salud del Reloncaví',
				'codigo_padre' => 'AO',
				 
			),
			255 => 
			array (
				'codigo' => 'AO038',

				'nombre' => 'Servicio de Salud Magallanes',
				'codigo_padre' => 'AO',
				 
			),
			256 => 
			array (
				'codigo' => 'AO039',

				'nombre' => 'Secretaría Regional Ministerial de Arica y Parinacota',
				'codigo_padre' => 'AO',
				 
			),
			257 => 
			array (
				'codigo' => 'AO040',

				'nombre' => 'Secretaría Regional Ministerial de Tarapacá',
				'codigo_padre' => 'AO',
				 
			),
			258 => 
			array (
				'codigo' => 'AO041',

				'nombre' => 'Secretaría Regional Ministerial de Antofagasta',
				'codigo_padre' => 'AO',
				 
			),
			259 => 
			array (
				'codigo' => 'AO042',

				'nombre' => 'Secretaría Regional Ministerial de Atacama',
				'codigo_padre' => 'AO',
				 
			),
			260 => 
			array (
				'codigo' => 'AO043',

				'nombre' => 'Secretaría Regional Ministerial de Coquimbo',
				'codigo_padre' => 'AO',
				 
			),
			261 => 
			array (
				'codigo' => 'AO044',

				'nombre' => 'Secretaría Regional Ministerial de Valparaíso',
				'codigo_padre' => 'AO',
				 
			),
			262 => 
			array (
				'codigo' => 'AO045',

				'nombre' => 'Secretaría Regional Ministerial Metropolitano de Santiago',
				'codigo_padre' => 'AO',
				 
			),
			263 => 
			array (
				'codigo' => 'AO046',

				'nombre' => 'Secretaría Regional Ministerial de O´Higgins',
				'codigo_padre' => 'AO',
				 
			),
			264 => 
			array (
				'codigo' => 'AO047',

				'nombre' => 'Secretaría Regional Ministerial del Maule',
				'codigo_padre' => 'AO',
				 
			),
			265 => 
			array (
				'codigo' => 'AO048',

				'nombre' => 'Secretaría Regional Ministerial del Bío Bío',
				'codigo_padre' => 'AO',
				 
			),
			266 => 
			array (
				'codigo' => 'AO049',

				'nombre' => 'Secretaría Regional Ministerial de La Araucanía',
				'codigo_padre' => 'AO',
				 
			),
			267 => 
			array (
				'codigo' => 'AO050',

				'nombre' => 'Secretaría Regional Ministerial de Los Ríos',
				'codigo_padre' => 'AO',
				 
			),
			268 => 
			array (
				'codigo' => 'AO051',

				'nombre' => 'Secretaría Regional Ministerial de Los Lagos',
				'codigo_padre' => 'AO',
				 
			),
			269 => 
			array (
				'codigo' => 'AO052',

				'nombre' => 'Secretaría Regional Ministerial de Aysén',
				'codigo_padre' => 'AO',
				 
			),
			270 => 
			array (
				'codigo' => 'AO053',

				'nombre' => 'Secretaría Regional Ministerial de Magallanes y Antártica Chilena',
				'codigo_padre' => 'AO',
				 
			),
			271 => 
			array (
				'codigo' => 'AO054',

				'nombre' => 'Hospital de San Camilo',
				'codigo_padre' => 'AO',
				 
			),
			272 => 
			array (
				'codigo' => 'AO055',

				'nombre' => 'Hospital Leonardo Guzmán de Antofagasta',
				'codigo_padre' => 'AO',
				 
			),
			273 => 
			array (
				'codigo' => 'AO056',

				'nombre' => 'Hospital de Victoria',
				'codigo_padre' => 'AO',
				 
			),
			274 => 
			array (
				'codigo' => 'AO057',

				'nombre' => 'Hospital Mauricio heyermann de Angol',
				'codigo_padre' => 'AO',
				 
			),
			275 => 
			array (
				'codigo' => 'AO058',

				'nombre' => 'Hospital Juan Noé de Arica',
				'codigo_padre' => 'AO',
				 
			),
			276 => 
			array (
				'codigo' => 'AO059',

				'nombre' => 'Hospital Regional de Coyhaique',
				'codigo_padre' => 'AO',
				 
			),
			277 => 
			array (
				'codigo' => 'AO060',

				'nombre' => 'Hospital Víctor Ríos Ruiz de Los Angeles',
				'codigo_padre' => 'AO',
				 
			),
			278 => 
			array (
				'codigo' => 'AO061',

				'nombre' => 'Hospital Dr. Augusto Riffart de Castro',
				'codigo_padre' => 'AO',
				 
			),
			279 => 
			array (
				'codigo' => 'AO062',

				'nombre' => 'Hospital San Jose de Coronel',
				'codigo_padre' => 'AO',
				 
			),
			280 => 
			array (
				'codigo' => 'AO063',

				'nombre' => 'Hospital de Lota',
				'codigo_padre' => 'AO',
				 
			),
			281 => 
			array (
				'codigo' => 'AO064',

				'nombre' => 'Hospital Guillermo Grant Benavente de Concepción',
				'codigo_padre' => 'AO',
				 
			),
			282 => 
			array (
				'codigo' => 'AO065',

				'nombre' => 'Hospital de Ovalle',
				'codigo_padre' => 'AO',
				 
			),
			283 => 
			array (
				'codigo' => 'AO066',

				'nombre' => 'Hospital La Serena',
				'codigo_padre' => 'AO',
				 
			),
			284 => 
			array (
				'codigo' => 'AO067',

				'nombre' => 'Hospital San Pablo de Coquimbo',
				'codigo_padre' => 'AO',
				 
			),
			285 => 
			array (
				'codigo' => 'AO068',

				'nombre' => 'Hospital Ernesto Torres de Iquique',
				'codigo_padre' => 'AO',
				 
			),
			286 => 
			array (
				'codigo' => 'AO069',

				'nombre' => 'HUAP Posta central',
				'codigo_padre' => 'AO',
				 
			),
			287 => 
			array (
				'codigo' => 'AO070',

				'nombre' => 'Hospital San Borja Arriarán',
				'codigo_padre' => 'AO',
				 
			),
			288 => 
			array (
				'codigo' => 'AO071',

				'nombre' => 'Hospital San José',
				'codigo_padre' => 'AO',
				 
			),
			289 => 
			array (
				'codigo' => 'AO072',

				'nombre' => 'Hospital Roberto del Río',
				'codigo_padre' => 'AO',
				 
			),
			290 => 
			array (
				'codigo' => 'AO073',

				'nombre' => 'Hospital Félix Bulnes',
				'codigo_padre' => 'AO',
				 
			),
			291 => 
			array (
				'codigo' => 'AO074',

				'nombre' => 'Hospital de Melipilla',
				'codigo_padre' => 'AO',
				 
			),
			292 => 
			array (
				'codigo' => 'AO075',

				'nombre' => 'Hospital San Juan de Dios',
				'codigo_padre' => 'AO',
				 
			),
			293 => 
			array (
				'codigo' => 'AO076',

				'nombre' => 'Instituto Pedro Aguirre Cerda',
				'codigo_padre' => 'AO',
				 
			),
			294 => 
			array (
				'codigo' => 'AO077',

				'nombre' => 'Instituto de Neurocirugía',
				'codigo_padre' => 'AO',
				 
			),
			295 => 
			array (
				'codigo' => 'AO078',

				'nombre' => 'Instituto Nacional de Geriatría',
				'codigo_padre' => 'AO',
				 
			),
			296 => 
			array (
				'codigo' => 'AO079',

				'nombre' => 'Hospital Del Salvador',
				'codigo_padre' => 'AO',
				 
			),
			297 => 
			array (
				'codigo' => 'AO080',

				'nombre' => 'Hospital Barros Luco ',
				'codigo_padre' => 'AO',
				 
			),
			298 => 
			array (
				'codigo' => 'AO081',

				'nombre' => 'Hospital Sótero del Río',
				'codigo_padre' => 'AO',
				 
			),
			299 => 
			array (
				'codigo' => 'AO082',

				'nombre' => 'Hospital Lautaro Navarro de Punta Arenas',
				'codigo_padre' => 'AO',
				 
			),
			300 => 
			array (
				'codigo' => 'AO083',

				'nombre' => 'Hospital de Curicó',
				'codigo_padre' => 'AO',
				 
			),
			301 => 
			array (
				'codigo' => 'AO084',

				'nombre' => 'Hospital de Linares',
				'codigo_padre' => 'AO',
				 
			),
			302 => 
			array (
				'codigo' => 'AO085',

				'nombre' => 'Hospital Regional de Talca',
				'codigo_padre' => 'AO',
				 
			),
			303 => 
			array (
				'codigo' => 'AO086',

				'nombre' => 'Hospital de San Carlos',
				'codigo_padre' => 'AO',
				 
			),
			304 => 
			array (
				'codigo' => 'AO087',

				'nombre' => 'Hospital San Juan de Dios de San Fernando',
				'codigo_padre' => 'AO',
				 
			),
			305 => 
			array (
				'codigo' => 'AO088',

				'nombre' => 'Hospital Regional de Rancagua',
				'codigo_padre' => 'AO',
				 
			),
			306 => 
			array (
				'codigo' => 'AO089',

				'nombre' => 'Hospital de Osorno',
				'codigo_padre' => 'AO',
				 
			),
			307 => 
			array (
				'codigo' => 'AO090',

				'nombre' => 'Hospital de Puerto Montt',
				'codigo_padre' => 'AO',
				 
			),
			308 => 
			array (
				'codigo' => 'AO091',

				'nombre' => 'Hospital de Tomé',
				'codigo_padre' => 'AO',
				 
			),
			309 => 
			array (
				'codigo' => 'AO092',

				'nombre' => 'Hospital de Las Higueras',
				'codigo_padre' => 'AO',
				 
			),
			310 => 
			array (
				'codigo' => 'AO093',

				'nombre' => 'Hospital Base de Valdivia',
				'codigo_padre' => 'AO',
				 
			),
			311 => 
			array (
				'codigo' => 'AO094',

				'nombre' => 'Hospital Claudio Vicuña de San Antonio',
				'codigo_padre' => 'AO',
				 
			),
			312 => 
			array (
				'codigo' => 'AO095',

				'nombre' => 'Hospital Carlos Van Büren',
				'codigo_padre' => 'AO',
				 
			),
			313 => 
			array (
				'codigo' => 'AO096',

				'nombre' => 'Hospital Eduardo Pereira de Valparaíso',
				'codigo_padre' => 'AO',
				 
			),
			314 => 
			array (
				'codigo' => 'AO097',

				'nombre' => 'Hospital de Quilpué',
				'codigo_padre' => 'AO',
				 
			),
			315 => 
			array (
				'codigo' => 'AO098',

				'nombre' => 'Hospital Gustavo Fricke',
				'codigo_padre' => 'AO',
				 
			),
			316 => 
			array (
				'codigo' => 'AO099',

				'nombre' => 'Hospital San Martín de Quillota',
				'codigo_padre' => 'AO',
				 
			),
			317 => 
			array (
				'codigo' => 'AO100',

				'nombre' => 'Instituto Psiquiátrico',
				'codigo_padre' => 'AO',
				 
			),
			318 => 
			array (
				'codigo' => 'AO101',

				'nombre' => 'Hospital San Juan de Dios de Los Andes',
				'codigo_padre' => 'AO',
				 
			),
			319 => 
			array (
				'codigo' => 'AO102',

				'nombre' => 'Hospital Exequiel González',
				'codigo_padre' => 'AO',
				 
			),
			320 => 
			array (
				'codigo' => 'AO103',

				'nombre' => 'Hospital El Pino',
				'codigo_padre' => 'AO',
				 
			),
			321 => 
			array (
				'codigo' => 'AO104',

				'nombre' => 'Hospital Herminda Martin',
				'codigo_padre' => 'AO',
				 
			),
			322 => 
			array (
				'codigo' => 'AO105',

				'nombre' => 'Instituto Nacional del Tórax',
				'codigo_padre' => 'AO',
				 
			),
			323 => 
			array (
				'codigo' => 'AO106',

				'nombre' => 'Hospital Luis Tisné',
				'codigo_padre' => 'AO',
				 
			),
			324 => 
			array (
				'codigo' => 'AO107',

				'nombre' => 'Instituto Traumatológico',
				'codigo_padre' => 'AO',
				 
			),
			325 => 
			array (
				'codigo' => 'AO108',

				'nombre' => 'Instituto Nacional del Cáncer',
				'codigo_padre' => 'AO',
				 
			),
			326 => 
			array (
				'codigo' => 'AO109',

				'nombre' => 'Hospital Luis Calvo Mackenna',
				'codigo_padre' => 'AO',
				 
			),
			327 => 
			array (
				'codigo' => 'AO110',

				'nombre' => 'Hospital Dr. Hernán Henríquez Aravena de Temuco',
				'codigo_padre' => 'AO',
				 
			),
			328 => 
			array (
				'codigo' => 'AO998',

				'nombre' => 'Autoridad Sanitaria',
				'codigo_padre' => 'AO',
				 
			),
			329 => 
			array (
				'codigo' => 'AO999',

				'nombre' => 'Comisión de Medicina Preventiva e Invalidez',
				'codigo_padre' => 'AO',
				 
			),
			331 => 
			array (
				'codigo' => 'AP001',

				'nombre' => 'Subsecretaría de Vivienda y Urbanismo',
				'codigo_padre' => 'AP',
				 
			),
			332 => 
			array (
				'codigo' => 'AP002',

				'nombre' => 'SERVIU Región de Tarapacá',
				'codigo_padre' => 'AP',
				 
			),
			333 => 
			array (
				'codigo' => 'AP003',

				'nombre' => 'SERVIU Región de Antofagasta',
				'codigo_padre' => 'AP',
				 
			),
			334 => 
			array (
				'codigo' => 'AP004',

				'nombre' => 'SERVIU Región de Atacama',
				'codigo_padre' => 'AP',
				 
			),
			335 => 
			array (
				'codigo' => 'AP005',

				'nombre' => 'SERVIU Región de Coquimbo',
				'codigo_padre' => 'AP',
				 
			),
			336 => 
			array (
				'codigo' => 'AP006',

				'nombre' => 'SERVIU Región de Valparaíso',
				'codigo_padre' => 'AP',
				 
			),
			337 => 
			array (
				'codigo' => 'AP007',

				'nombre' => 'SERVIU Región Metropolitana de Santiago',
				'codigo_padre' => 'AP',
				 
			),
			338 => 
			array (
				'codigo' => 'AP008',

				'nombre' => 'SERVIU Región del Libertador Bernardo O\'Higgins',
				'codigo_padre' => 'AP',
				 
			),
			339 => 
			array (
				'codigo' => 'AP009',

				'nombre' => 'SERVIU Región del Maule',
				'codigo_padre' => 'AP',
				 
			),
			340 => 
			array (
				'codigo' => 'AP010',

				'nombre' => 'SERVIU Región del Bío Bío',
				'codigo_padre' => 'AP',
				 
			),
			341 => 
			array (
				'codigo' => 'AP011',

				'nombre' => 'SERVIU Región de la Araucanía',
				'codigo_padre' => 'AP',
				 
			),
			342 => 
			array (
				'codigo' => 'AP012',

				'nombre' => 'SERVIU Región de los Lagos',
				'codigo_padre' => 'AP',
				 
			),
			343 => 
			array (
				'codigo' => 'AP013',

				'nombre' => 'SERVIU Región de Aysén del General Carlos Ibáñez del Campo',
				'codigo_padre' => 'AP',
				 
			),
			344 => 
			array (
				'codigo' => 'AP014',

				'nombre' => 'SERVIU Región de Magallanes y la Antártica Chilena',
				'codigo_padre' => 'AP',
				 
			),
			345 => 
			array (
				'codigo' => 'AP015',

				'nombre' => 'SERVIU Región de Los Ríos',
				'codigo_padre' => 'AP',
				 
			),
			346 => 
			array (
				'codigo' => 'AP016',

				'nombre' => 'SERVIU Arica y Parinacota',
				'codigo_padre' => 'AP',
				 
			),
			347 => 
			array (
				'codigo' => 'AP017',

				'nombre' => 'Parque Metropolitano de Santiago',
				'codigo_padre' => 'AP',
				 
			),
			349 => 
			array (
				'codigo' => 'AQ001',

				'nombre' => 'Subsecretaría de Bienes Nacionales',
				'codigo_padre' => 'AQ',
				 
			),
			351 => 
			array (
				'codigo' => 'AR001',

				'nombre' => 'Subsecretaría de Agricultura',
				'codigo_padre' => 'AR',
				 
			),
			352 => 
			array (
				'codigo' => 'AR002',

				'nombre' => 'Comisión Nacional de Riego',
				'codigo_padre' => 'AR',
				 
			),
			353 => 
			array (
				'codigo' => 'AR003',

				'nombre' => 'Corporación Nacional Forestal',
				'codigo_padre' => 'AR',
				 
			),
			354 => 
			array (
				'codigo' => 'AR004',

				'nombre' => 'Instituto de Desarrollo Agropecuario',
				'codigo_padre' => 'AR',
				 
			),
			355 => 
			array (
				'codigo' => 'AR005',

				'nombre' => 'Oficinas de Estudios y Políticas Agrarias',
				'codigo_padre' => 'AR',
				 
			),
			356 => 
			array (
				'codigo' => 'AR006',

				'nombre' => 'Servicio Agrícola y Ganadero',
				'codigo_padre' => 'AR',
				 
			),
			358 => 
			array (
				'codigo' => 'AS001',

				'nombre' => 'Subsecretaría de Minería',
				'codigo_padre' => 'AS',
				 
			),
			359 => 
			array (
				'codigo' => 'AS002',

				'nombre' => 'Comisión Chilena del Cobre',
				'codigo_padre' => 'AS',
				 
			),
			360 => 
			array (
				'codigo' => 'AS004',

				'nombre' => 'Servicio Nacional de Geología y Minería',
				'codigo_padre' => 'AS',
				 
			),
			362 => 
			array (
				'codigo' => 'AT001',

				'nombre' => 'Servicio Nacional de la Mujer',
				'codigo_padre' => 'AT',
				 
			),
			364 => 
			array (
				'codigo' => 'AU001',

				'nombre' => 'Comisión Nacional de Energía',
				'codigo_padre' => 'AU',
				 
			),
			365 => 
			array (
				'codigo' => 'AU002',

				'nombre' => 'Subsecretaría de Energía',
				'codigo_padre' => 'AU',
				 
			),
			366 => 
			array (
				'codigo' => 'AU003',

				'nombre' => 'Comisión Chilena de Energía Nuclear',
				'codigo_padre' => 'AU',
				 
			),
			367 => 
			array (
				'codigo' => 'AU004',

				'nombre' => 'Superintendencia de Electricidad y Combustibles',
				'codigo_padre' => 'AU',
				 
			),
			369 => 
			array (
				'codigo' => 'AV001',

				'nombre' => 'Consejo Nacional de la Cultura y las Artes',
				'codigo_padre' => 'AV',
				 
			),
			371 => 
			array (
				'codigo' => 'AW001',

				'nombre' => 'Comisión Nacional del Medio Ambiente',
				'codigo_padre' => 'AW',
				 
			),
			372 => 
			array (
				'codigo' => 'AW002',

				'nombre' => 'Subsecretaría del Medio Ambiente',
				'codigo_padre' => 'AW',
				 
			),
			373 => 
			array (
				'codigo' => 'AW003',

				'nombre' => 'Superintendencia del Medio Ambiente',
				'codigo_padre' => 'AW',
				 
			),
			374 => 
			array (
				'codigo' => 'AW004',

				'nombre' => 'Servicio Evaluación Ambiental',
				'codigo_padre' => 'AW',
				 
			),
			376 => 
			array (
				'codigo' => 'AX001',

				'nombre' => 'Consejo de Defensa del Estado',
				'codigo_padre' => 'AX',
				 
			),
			378 => 
			array (
				'codigo' => 'AY001',

				'nombre' => 'Instituto Nacional de Propiedad Industrial',
				'codigo_padre' => 'AH',
				 
			),
			379 => 
			array (
				'codigo' => 'AY002',

				'nombre' => 'Subsecretaría del Deporte',
				'codigo_padre' => 'AY',
				 
			),
			380 => 
			array (
				'codigo' => 'AZ001',

				'nombre' => 'Comisión Nacional de Acreditación',
				'codigo_padre' => 'AJ',
				 
			),
			382 => 
			array (
				'codigo' => 'EP001',

				'nombre' => 'Astilleros y Maestranzas de La Armada',
				'codigo_padre' => 'EP',
				 
			),
			383 => 
			array (
				'codigo' => 'EP002',

				'nombre' => 'Casa de Moneda de Chile S.A.',
				'codigo_padre' => 'EP',
				 
			),
			384 => 
			array (
				'codigo' => 'EP003',

			'nombre' => 'Cimm (Centro de Investigación Minera y Metalúrgica)',
				'codigo_padre' => 'EP',
				 
			),
			385 => 
			array (
				'codigo' => 'EP004',

				'nombre' => 'Cimm Tecnologías y Servicios S.A.',
				'codigo_padre' => 'EP',
				 
			),
			386 => 
			array (
				'codigo' => 'EP005',

				'nombre' => 'Comercializadora de Trigo S.A.',
				'codigo_padre' => 'EP',
				 
			),
			387 => 
			array (
				'codigo' => 'EP006',

				'nombre' => 'Corporación Nacional del Cobre de Chile',
				'codigo_padre' => 'EP',
				 
			),
			388 => 
			array (
				'codigo' => 'EP007',

				'nombre' => 'Empresa Concesionaria de Servicios Sanitarios S.A.',
				'codigo_padre' => 'EP',
				 
			),
			389 => 
			array (
				'codigo' => 'EP008',

				'nombre' => 'Empresa de Abastecimiento de Zonas Aisladas',
				'codigo_padre' => 'EP',
				 
			),
			390 => 
			array (
				'codigo' => 'EP009',

				'nombre' => 'Empresa de Correos de Chile',
				'codigo_padre' => 'EP',
				 
			),
			391 => 
			array (
				'codigo' => 'EP010',

				'nombre' => 'Empresa de los Ferrocarriles del Estado',
				'codigo_padre' => 'EP',
				 
			),
			392 => 
			array (
				'codigo' => 'EP011',

				'nombre' => 'Empresa de Servicios Sanitarios Lago Peñuelas S.A.',
				'codigo_padre' => 'EP',
				 
			),
			393 => 
			array (
				'codigo' => 'EP012',

				'nombre' => 'Empresa de Transporte de Pasajeros Metro S.A.',
				'codigo_padre' => 'EP',
				 
			),
			394 => 
			array (
				'codigo' => 'EP013',

				'nombre' => 'Empresa Nacional de Aeronáutica',
				'codigo_padre' => 'EP',
				 
			),
			395 => 
			array (
				'codigo' => 'EP014',

				'nombre' => 'Empresa Nacional de Minería',
				'codigo_padre' => 'EP',
				 
			),
			396 => 
			array (
				'codigo' => 'EP015',

				'nombre' => 'Empresa Nacional del Carbón S.A.',
				'codigo_padre' => 'EP',
				 
			),
			397 => 
			array (
				'codigo' => 'EP016',

				'nombre' => 'Empresa Nacional del Petróleo',
				'codigo_padre' => 'EP',
				 
			),
			398 => 
			array (
				'codigo' => 'EP017',

				'nombre' => 'Empresa Periodística La Nación S.A.',
				'codigo_padre' => 'EP',
				 
			),
			399 => 
			array (
				'codigo' => 'EP018',

				'nombre' => 'Empresa Portuaria Antofagasta',
				'codigo_padre' => 'EP',
				 
			),
			400 => 
			array (
				'codigo' => 'EP019',

				'nombre' => 'Empresa Portuaria Arica',
				'codigo_padre' => 'EP',
				 
			),
			401 => 
			array (
				'codigo' => 'EP020',

				'nombre' => 'Empresa Portuaria Austral',
				'codigo_padre' => 'EP',
				 
			),
			402 => 
			array (
				'codigo' => 'EP021',

				'nombre' => 'Empresa Portuaria Chacabuco',
				'codigo_padre' => 'EP',
				 
			),
			403 => 
			array (
				'codigo' => 'EP022',

				'nombre' => 'Empresa Portuaria Coquimbo',
				'codigo_padre' => 'EP',
				 
			),
			404 => 
			array (
				'codigo' => 'EP023',

				'nombre' => 'Empresa Portuaria Iquique',
				'codigo_padre' => 'EP',
				 
			),
			405 => 
			array (
				'codigo' => 'EP024',

				'nombre' => 'Empresa Portuaria Puerto Montt',
				'codigo_padre' => 'EP',
				 
			),
			406 => 
			array (
				'codigo' => 'EP025',

				'nombre' => 'Empresa Portuaria San Antonio',
				'codigo_padre' => 'EP',
				 
			),
			407 => 
			array (
				'codigo' => 'EP026',

				'nombre' => 'Empresa Portuaria Talcahuano San Vicente',
				'codigo_padre' => 'EP',
				 
			),
			408 => 
			array (
				'codigo' => 'EP027',

				'nombre' => 'Empresa Portuaria Valparaíso',
				'codigo_padre' => 'EP',
				 
			),
			409 => 
			array (
				'codigo' => 'EP028',

				'nombre' => 'Fábrica y Maestranzas del Ejército',
				'codigo_padre' => 'EP',
				 
			),
			410 => 
			array (
				'codigo' => 'EP029',

				'nombre' => 'Polla Chilena de Beneficencia S.A.',
				'codigo_padre' => 'EP',
				 
			),
			411 => 
			array (
				'codigo' => 'EP030',

				'nombre' => 'Puerto Madero Impresores S.A.',
				'codigo_padre' => 'EP',
				 
			),
			412 => 
			array (
				'codigo' => 'EP031',

				'nombre' => 'Sociedad Agrícola Sacor Ltda.',
				'codigo_padre' => 'EP',
				 
			),
			413 => 
			array (
				'codigo' => 'EP032',

				'nombre' => 'Sociedad Agrícola y Servicios Isla de Pascua Ltda.',
				'codigo_padre' => 'EP',
				 
			),
			414 => 
			array (
				'codigo' => 'EP033',

				'nombre' => 'Televisión Nacional de Chile',
				'codigo_padre' => 'EP',
				 
			),
			415 => 
			array (
				'codigo' => 'EP034',

				'nombre' => 'Zona Franca de Iquique S.A.',
				'codigo_padre' => 'EP',
				 
			),
			416 => 
			array (
				'codigo' => 'EP035',

				'nombre' => 'Metro',
				'codigo_padre' => 'EP',
				 
			),
			417 => 
			array (
				'codigo' => 'EP036',

				'nombre' => 'Polla Chilena',
				'codigo_padre' => 'EP',
				 
			),
			418 => 
			array (
				'codigo' => 'EP037',

				'nombre' => 'Empresas de Servicios Sanitarios',
				'codigo_padre' => 'EP',
				 
			),
			419 => 
			array (
				'codigo' => 'EP038',

				'nombre' => 'Zofri',
				'codigo_padre' => 'EP',
				 
			),
			420 => 
			array (
				'codigo' => 'EP039',

				'nombre' => 'Empresas Portuarias',
				'codigo_padre' => 'EP',
				 
			),
			421 => 
			array (
				'codigo' => 'EP040',

				'nombre' => 'Televisión Nacional de Chile',
				'codigo_padre' => 'EP',
				 
			),
			422 => 
			array (
				'codigo' => 'EP041',

				'nombre' => 'Empresa de los Ferrocarriles del Estado',
				'codigo_padre' => 'EP',
				 
			),
			423 => 
			array (
				'codigo' => 'EP042',

				'nombre' => 'Empresa de Correos de Chile',
				'codigo_padre' => 'EP',
				 
			),
			424 => 
			array (
				'codigo' => 'EP043',

				'nombre' => 'Banco del Estado',
				'codigo_padre' => 'EP',
				 
			),
			426 => 
			array (
				'codigo' => 'FU001',

				'nombre' => 'Fundación Artesanías de Chile',
				'codigo_padre' => 'FU',
				 
			),
			427 => 
			array (
				'codigo' => 'FU002',

				'nombre' => 'Fundación de las Familias',
				'codigo_padre' => 'FU',
				 
			),
			428 => 
			array (
				'codigo' => 'FU003',

				'nombre' => 'Fundación Chilenter',
				'codigo_padre' => 'FU',
				 
			),
			429 => 
			array (
				'codigo' => 'FU004',

				'nombre' => 'Fundación Integra',
				'codigo_padre' => 'FU',
				 
			),
			430 => 
			array (
				'codigo' => 'FU005',

				'nombre' => 'Fundación Orquestas Juveniles',
				'codigo_padre' => 'FU',
				 
			),
			431 => 
			array (
				'codigo' => 'FU006',

				'nombre' => 'Fundación de Promoción y Desarrollo de la Mujer',
				'codigo_padre' => 'FU',
				 
			),
			432 => 
			array (
				'codigo' => 'FU007',

				'nombre' => 'Fundación Tiempos Nuevos',
				'codigo_padre' => 'FU',
				 
			),
			434 => 
			array (
				'codigo' => 'MU001',

				'nombre' => 'Municipalidad de Algarrobo',
				'codigo_padre' => 'MU',
				 
			),
			435 => 
			array (
				'codigo' => 'MU002',

				'nombre' => 'Municipalidad de Alhué',
				'codigo_padre' => 'MU',
				 
			),
			436 => 
			array (
				'codigo' => 'MU003',

				'nombre' => 'Municipalidad de Alto Biobío',
				'codigo_padre' => 'MU',
				 
			),
			437 => 
			array (
				'codigo' => 'MU004',

				'nombre' => 'Municipalidad de Alto del Carmen',
				'codigo_padre' => 'MU',
				 
			),
			438 => 
			array (
				'codigo' => 'MU005',

				'nombre' => 'Municipalidad de Alto Hospicio',
				'codigo_padre' => 'MU',
				 
			),
			439 => 
			array (
				'codigo' => 'MU006',

				'nombre' => 'Municipalidad de Ancud',
				'codigo_padre' => 'MU',
				 
			),
			440 => 
			array (
				'codigo' => 'MU007',

				'nombre' => 'Municipalidad de Andacollo',
				'codigo_padre' => 'MU',
				 
			),
			441 => 
			array (
				'codigo' => 'MU008',

				'nombre' => 'Municipalidad de Angol',
				'codigo_padre' => 'MU',
				 
			),
			442 => 
			array (
				'codigo' => 'MU009',

				'nombre' => 'Municipalidad de Antofagasta',
				'codigo_padre' => 'MU',
				 
			),
			443 => 
			array (
				'codigo' => 'MU010',

				'nombre' => 'Municipalidad de Antuco',
				'codigo_padre' => 'MU',
				 
			),
			444 => 
			array (
				'codigo' => 'MU011',

				'nombre' => 'Municipalidad de Arauco',
				'codigo_padre' => 'MU',
				 
			),
			445 => 
			array (
				'codigo' => 'MU012',

				'nombre' => 'Municipalidad de Arica',
				'codigo_padre' => 'MU',
				 
			),
			446 => 
			array (
				'codigo' => 'MU013',

				'nombre' => 'Municipalidad de Aysen',
				'codigo_padre' => 'MU',
				 
			),
			447 => 
			array (
				'codigo' => 'MU014',

				'nombre' => 'Municipalidad de Buin',
				'codigo_padre' => 'MU',
				 
			),
			448 => 
			array (
				'codigo' => 'MU015',

				'nombre' => 'Municipalidad de Bulnes',
				'codigo_padre' => 'MU',
				 
			),
			449 => 
			array (
				'codigo' => 'MU016',

				'nombre' => 'Municipalidad de Cabildo',
				'codigo_padre' => 'MU',
				 
			),
			450 => 
			array (
				'codigo' => 'MU017',

				'nombre' => 'Municipalidad de Cabo de Hornos y Antártica',
				'codigo_padre' => 'MU',
				 
			),
			451 => 
			array (
				'codigo' => 'MU018',

				'nombre' => 'Municipalidad de Cabrero',
				'codigo_padre' => 'MU',
				 
			),
			452 => 
			array (
				'codigo' => 'MU019',

				'nombre' => 'Municipalidad de Calama',
				'codigo_padre' => 'MU',
				 
			),
			453 => 
			array (
				'codigo' => 'MU020',

				'nombre' => 'Municipalidad de Calbuco',
				'codigo_padre' => 'MU',
				 
			),
			454 => 
			array (
				'codigo' => 'MU021',

				'nombre' => 'Municipalidad de Caldera',
				'codigo_padre' => 'MU',
				 
			),
			455 => 
			array (
				'codigo' => 'MU022',

				'nombre' => 'Municipalidad de Calera de Tango',
				'codigo_padre' => 'MU',
				 
			),
			456 => 
			array (
				'codigo' => 'MU023',

				'nombre' => 'Municipalidad de Calle Larga',
				'codigo_padre' => 'MU',
				 
			),
			457 => 
			array (
				'codigo' => 'MU024',

				'nombre' => 'Municipalidad de Camarones',
				'codigo_padre' => 'MU',
				 
			),
			458 => 
			array (
				'codigo' => 'MU025',

				'nombre' => 'Municipalidad de Camiña',
				'codigo_padre' => 'MU',
				 
			),
			459 => 
			array (
				'codigo' => 'MU026',

				'nombre' => 'Municipalidad de Canela',
				'codigo_padre' => 'MU',
				 
			),
			460 => 
			array (
				'codigo' => 'MU027',

				'nombre' => 'Municipalidad de Cañete',
				'codigo_padre' => 'MU',
				 
			),
			461 => 
			array (
				'codigo' => 'MU028',

				'nombre' => 'Municipalidad de Carahue',
				'codigo_padre' => 'MU',
				 
			),
			462 => 
			array (
				'codigo' => 'MU029',

				'nombre' => 'Municipalidad de Cartagena',
				'codigo_padre' => 'MU',
				 
			),
			463 => 
			array (
				'codigo' => 'MU030',

				'nombre' => 'Municipalidad de Casablanca',
				'codigo_padre' => 'MU',
				 
			),
			464 => 
			array (
				'codigo' => 'MU031',

				'nombre' => 'Municipalidad de Castro',
				'codigo_padre' => 'MU',
				 
			),
			465 => 
			array (
				'codigo' => 'MU032',

				'nombre' => 'Municipalidad de Catemu',
				'codigo_padre' => 'MU',
				 
			),
			466 => 
			array (
				'codigo' => 'MU033',

				'nombre' => 'Municipalidad de Cauquenes',
				'codigo_padre' => 'MU',
				 
			),
			467 => 
			array (
				'codigo' => 'MU034',

				'nombre' => 'Municipalidad de Cerrillos',
				'codigo_padre' => 'MU',
				 
			),
			468 => 
			array (
				'codigo' => 'MU035',

				'nombre' => 'Municipalidad de Cerro Navia',
				'codigo_padre' => 'MU',
				 
			),
			469 => 
			array (
				'codigo' => 'MU036',

				'nombre' => 'Municipalidad de Chaitén',
				'codigo_padre' => 'MU',
				 
			),
			470 => 
			array (
				'codigo' => 'MU037',

				'nombre' => 'Municipalidad de Chanco',
				'codigo_padre' => 'MU',
				 
			),
			471 => 
			array (
				'codigo' => 'MU038',

				'nombre' => 'Municipalidad de Chañaral',
				'codigo_padre' => 'MU',
				 
			),
			472 => 
			array (
				'codigo' => 'MU039',

				'nombre' => 'Municipalidad de Chépica',
				'codigo_padre' => 'MU',
				 
			),
			473 => 
			array (
				'codigo' => 'MU040',

				'nombre' => 'Municipalidad de Chiguayante',
				'codigo_padre' => 'MU',
				 
			),
			474 => 
			array (
				'codigo' => 'MU041',

				'nombre' => 'Municipalidad de Chile Chico',
				'codigo_padre' => 'MU',
				 
			),
			475 => 
			array (
				'codigo' => 'MU042',

				'nombre' => 'Municipalidad de Chillán',
				'codigo_padre' => 'MU',
				 
			),
			476 => 
			array (
				'codigo' => 'MU043',

				'nombre' => 'Municipalidad de Chillán Viejo',
				'codigo_padre' => 'MU',
				 
			),
			477 => 
			array (
				'codigo' => 'MU044',

				'nombre' => 'Municipalidad de Chimbarongo',
				'codigo_padre' => 'MU',
				 
			),
			478 => 
			array (
				'codigo' => 'MU045',

				'nombre' => 'Municipalidad de Cholchol',
				'codigo_padre' => 'MU',
				 
			),
			479 => 
			array (
				'codigo' => 'MU046',

				'nombre' => 'Municipalidad de Chonchi',
				'codigo_padre' => 'MU',
				 
			),
			480 => 
			array (
				'codigo' => 'MU047',

				'nombre' => 'Municipalidad de Cisnes',
				'codigo_padre' => 'MU',
				 
			),
			481 => 
			array (
				'codigo' => 'MU048',

				'nombre' => 'Municipalidad de Cobquecura',
				'codigo_padre' => 'MU',
				 
			),
			482 => 
			array (
				'codigo' => 'MU049',

				'nombre' => 'Municipalidad de Cochamó',
				'codigo_padre' => 'MU',
				 
			),
			483 => 
			array (
				'codigo' => 'MU050',

				'nombre' => 'Municipalidad de Cochrane',
				'codigo_padre' => 'MU',
				 
			),
			484 => 
			array (
				'codigo' => 'MU051',

				'nombre' => 'Municipalidad de Codegua',
				'codigo_padre' => 'MU',
				 
			),
			485 => 
			array (
				'codigo' => 'MU052',

				'nombre' => 'Municipalidad de Coelemu',
				'codigo_padre' => 'MU',
				 
			),
			486 => 
			array (
				'codigo' => 'MU053',

				'nombre' => 'Municipalidad de Coihueco',
				'codigo_padre' => 'MU',
				 
			),
			487 => 
			array (
				'codigo' => 'MU054',

				'nombre' => 'Municipalidad de Coinco',
				'codigo_padre' => 'MU',
				 
			),
			488 => 
			array (
				'codigo' => 'MU055',

				'nombre' => 'Municipalidad de Colbún',
				'codigo_padre' => 'MU',
				 
			),
			489 => 
			array (
				'codigo' => 'MU056',

				'nombre' => 'Municipalidad de Colchane',
				'codigo_padre' => 'MU',
				 
			),
			490 => 
			array (
				'codigo' => 'MU057',

				'nombre' => 'Municipalidad de Colina',
				'codigo_padre' => 'MU',
				 
			),
			491 => 
			array (
				'codigo' => 'MU058',

				'nombre' => 'Municipalidad de Collipulli',
				'codigo_padre' => 'MU',
				 
			),
			492 => 
			array (
				'codigo' => 'MU059',

				'nombre' => 'Municipalidad de Coltauco',
				'codigo_padre' => 'MU',
				 
			),
			493 => 
			array (
				'codigo' => 'MU060',

				'nombre' => 'Municipalidad de Combarbalá',
				'codigo_padre' => 'MU',
				 
			),
			494 => 
			array (
				'codigo' => 'MU061',

				'nombre' => 'Municipalidad de Concepción',
				'codigo_padre' => 'MU',
				 
			),
			495 => 
			array (
				'codigo' => 'MU062',

				'nombre' => 'Municipalidad de Conchalí',
				'codigo_padre' => 'MU',
				 
			),
			496 => 
			array (
				'codigo' => 'MU063',

				'nombre' => 'Municipalidad de Concón',
				'codigo_padre' => 'MU',
				 
			),
			497 => 
			array (
				'codigo' => 'MU064',

				'nombre' => 'Municipalidad de Constitución',
				'codigo_padre' => 'MU',
				 
			),
			498 => 
			array (
				'codigo' => 'MU065',

				'nombre' => 'Municipalidad de Contulmo',
				'codigo_padre' => 'MU',
				 
			),
			499 => 
			array (
				'codigo' => 'MU066',

				'nombre' => 'Municipalidad de Copiapó',
				'codigo_padre' => 'MU',
				 
			),
		));
		\DB::table('entidades')->insert(array (
			0 => 
			array (
				'codigo' => 'MU067',

				'nombre' => 'Municipalidad de Coquimbo',
				'codigo_padre' => 'MU',
				 
			),
			1 => 
			array (
				'codigo' => 'MU068',

				'nombre' => 'Municipalidad de Coronel',
				'codigo_padre' => 'MU',
				 
			),
			2 => 
			array (
				'codigo' => 'MU069',

				'nombre' => 'Municipalidad de Corral',
				'codigo_padre' => 'MU',
				 
			),
			3 => 
			array (
				'codigo' => 'MU070',

				'nombre' => 'Municipalidad de Coyhaique',
				'codigo_padre' => 'MU',
				 
			),
			4 => 
			array (
				'codigo' => 'MU071',

				'nombre' => 'Municipalidad de Cunco',
				'codigo_padre' => 'MU',
				 
			),
			5 => 
			array (
				'codigo' => 'MU072',

				'nombre' => 'Municipalidad de Curacautín',
				'codigo_padre' => 'MU',
				 
			),
			6 => 
			array (
				'codigo' => 'MU073',

				'nombre' => 'Municipalidad de Curacaví',
				'codigo_padre' => 'MU',
				 
			),
			7 => 
			array (
				'codigo' => 'MU074',

				'nombre' => 'Municipalidad de Curaco de Vélez',
				'codigo_padre' => 'MU',
				 
			),
			8 => 
			array (
				'codigo' => 'MU075',

				'nombre' => 'Municipalidad de Curanilahue',
				'codigo_padre' => 'MU',
				 
			),
			9 => 
			array (
				'codigo' => 'MU076',

				'nombre' => 'Municipalidad de Curarrehue',
				'codigo_padre' => 'MU',
				 
			),
			10 => 
			array (
				'codigo' => 'MU077',

				'nombre' => 'Municipalidad de Curepto',
				'codigo_padre' => 'MU',
				 
			),
			11 => 
			array (
				'codigo' => 'MU078',

				'nombre' => 'Municipalidad de Curicó',
				'codigo_padre' => 'MU',
				 
			),
			12 => 
			array (
				'codigo' => 'MU079',

				'nombre' => 'Municipalidad de Dalcahue',
				'codigo_padre' => 'MU',
				 
			),
			13 => 
			array (
				'codigo' => 'MU080',

				'nombre' => 'Municipalidad de Diego de Almagro',
				'codigo_padre' => 'MU',
				 
			),
			14 => 
			array (
				'codigo' => 'MU081',

				'nombre' => 'Municipalidad de Doñihue',
				'codigo_padre' => 'MU',
				 
			),
			15 => 
			array (
				'codigo' => 'MU082',

				'nombre' => 'Municipalidad de El Bosque',
				'codigo_padre' => 'MU',
				 
			),
			16 => 
			array (
				'codigo' => 'MU083',

				'nombre' => 'Municipalidad de El Carmen',
				'codigo_padre' => 'MU',
				 
			),
			17 => 
			array (
				'codigo' => 'MU084',

				'nombre' => 'Municipalidad de El Monte',
				'codigo_padre' => 'MU',
				 
			),
			18 => 
			array (
				'codigo' => 'MU085',

				'nombre' => 'Municipalidad de El Quisco',
				'codigo_padre' => 'MU',
				 
			),
			19 => 
			array (
				'codigo' => 'MU086',

				'nombre' => 'Municipalidad de El Tabo',
				'codigo_padre' => 'MU',
				 
			),
			20 => 
			array (
				'codigo' => 'MU087',

				'nombre' => 'Municipalidad de Empedrado',
				'codigo_padre' => 'MU',
				 
			),
			21 => 
			array (
				'codigo' => 'MU088',

				'nombre' => 'Municipalidad de Ercilla',
				'codigo_padre' => 'MU',
				 
			),
			22 => 
			array (
				'codigo' => 'MU089',

				'nombre' => 'Municipalidad de Estación Central',
				'codigo_padre' => 'MU',
				 
			),
			23 => 
			array (
				'codigo' => 'MU090',

				'nombre' => 'Municipalidad de Florida',
				'codigo_padre' => 'MU',
				 
			),
			24 => 
			array (
				'codigo' => 'MU091',

				'nombre' => 'Municipalidad de Freire',
				'codigo_padre' => 'MU',
				 
			),
			25 => 
			array (
				'codigo' => 'MU092',

				'nombre' => 'Municipalidad de Freirina',
				'codigo_padre' => 'MU',
				 
			),
			26 => 
			array (
				'codigo' => 'MU093',

				'nombre' => 'Municipalidad de Fresia',
				'codigo_padre' => 'MU',
				 
			),
			27 => 
			array (
				'codigo' => 'MU094',

				'nombre' => 'Municipalidad de Frutillar',
				'codigo_padre' => 'MU',
				 
			),
			28 => 
			array (
				'codigo' => 'MU095',

				'nombre' => 'Municipalidad de Futaleufú',
				'codigo_padre' => 'MU',
				 
			),
			29 => 
			array (
				'codigo' => 'MU096',

				'nombre' => 'Municipalidad de Futrono',
				'codigo_padre' => 'MU',
				 
			),
			30 => 
			array (
				'codigo' => 'MU097',

				'nombre' => 'Municipalidad de Galvarino',
				'codigo_padre' => 'MU',
				 
			),
			31 => 
			array (
				'codigo' => 'MU098',

				'nombre' => 'Municipalidad de General Lagos',
				'codigo_padre' => 'MU',
				 
			),
			32 => 
			array (
				'codigo' => 'MU099',

				'nombre' => 'Municipalidad de Gorbea',
				'codigo_padre' => 'MU',
				 
			),
			33 => 
			array (
				'codigo' => 'MU100',

				'nombre' => 'Municipalidad de Graneros',
				'codigo_padre' => 'MU',
				 
			),
			34 => 
			array (
				'codigo' => 'MU101',

				'nombre' => 'Municipalidad de Guaitecas',
				'codigo_padre' => 'MU',
				 
			),
			35 => 
			array (
				'codigo' => 'MU102',

				'nombre' => 'Municipalidad de Hijuelas',
				'codigo_padre' => 'MU',
				 
			),
			36 => 
			array (
				'codigo' => 'MU103',

				'nombre' => 'Municipalidad de Hualaihué',
				'codigo_padre' => 'MU',
				 
			),
			37 => 
			array (
				'codigo' => 'MU104',

				'nombre' => 'Municipalidad de Hualañé',
				'codigo_padre' => 'MU',
				 
			),
			38 => 
			array (
				'codigo' => 'MU105',

				'nombre' => 'Municipalidad de Hualpén',
				'codigo_padre' => 'MU',
				 
			),
			39 => 
			array (
				'codigo' => 'MU106',

				'nombre' => 'Municipalidad de Hualqui',
				'codigo_padre' => 'MU',
				 
			),
			40 => 
			array (
				'codigo' => 'MU107',

				'nombre' => 'Municipalidad de Huara',
				'codigo_padre' => 'MU',
				 
			),
			41 => 
			array (
				'codigo' => 'MU108',

				'nombre' => 'Municipalidad de Huasco',
				'codigo_padre' => 'MU',
				 
			),
			42 => 
			array (
				'codigo' => 'MU109',

				'nombre' => 'Municipalidad de Huechuraba',
				'codigo_padre' => 'MU',
				 
			),
			43 => 
			array (
				'codigo' => 'MU110',

				'nombre' => 'Municipalidad de Illapel',
				'codigo_padre' => 'MU',
				 
			),
			44 => 
			array (
				'codigo' => 'MU111',

				'nombre' => 'Municipalidad de Independencia',
				'codigo_padre' => 'MU',
				 
			),
			45 => 
			array (
				'codigo' => 'MU112',

				'nombre' => 'Municipalidad de Iquique',
				'codigo_padre' => 'MU',
				 
			),
			46 => 
			array (
				'codigo' => 'MU113',

				'nombre' => 'Municipalidad de Isla de Maipo',
				'codigo_padre' => 'MU',
				 
			),
			47 => 
			array (
				'codigo' => 'MU114',

				'nombre' => 'Municipalidad de Isla de Pascua',
				'codigo_padre' => 'MU',
				 
			),
			48 => 
			array (
				'codigo' => 'MU115',

				'nombre' => 'Municipalidad de Juan Fernández',
				'codigo_padre' => 'MU',
				 
			),
			49 => 
			array (
				'codigo' => 'MU116',

				'nombre' => 'Municipalidad de La Calera',
				'codigo_padre' => 'MU',
				 
			),
			50 => 
			array (
				'codigo' => 'MU117',

				'nombre' => 'Municipalidad de La Cisterna',
				'codigo_padre' => 'MU',
				 
			),
			51 => 
			array (
				'codigo' => 'MU118',

				'nombre' => 'Municipalidad de La Cruz',
				'codigo_padre' => 'MU',
				 
			),
			52 => 
			array (
				'codigo' => 'MU119',

				'nombre' => 'Municipalidad de La Estrella',
				'codigo_padre' => 'MU',
				 
			),
			53 => 
			array (
				'codigo' => 'MU120',

				'nombre' => 'Municipalidad de La Florida',
				'codigo_padre' => 'MU',
				 
			),
			54 => 
			array (
				'codigo' => 'MU121',

				'nombre' => 'Municipalidad de La Granja',
				'codigo_padre' => 'MU',
				 
			),
			55 => 
			array (
				'codigo' => 'MU122',

				'nombre' => 'Municipalidad de La Higuera',
				'codigo_padre' => 'MU',
				 
			),
			56 => 
			array (
				'codigo' => 'MU123',

				'nombre' => 'Municipalidad de La Ligua',
				'codigo_padre' => 'MU',
				 
			),
			57 => 
			array (
				'codigo' => 'MU124',

				'nombre' => 'Municipalidad de La Pintana',
				'codigo_padre' => 'MU',
				 
			),
			58 => 
			array (
				'codigo' => 'MU125',

				'nombre' => 'Municipalidad de La Reina',
				'codigo_padre' => 'MU',
				 
			),
			59 => 
			array (
				'codigo' => 'MU126',

				'nombre' => 'Municipalidad de La Serena',
				'codigo_padre' => 'MU',
				 
			),
			60 => 
			array (
				'codigo' => 'MU127',

				'nombre' => 'Municipalidad de La Unión',
				'codigo_padre' => 'MU',
				 
			),
			61 => 
			array (
				'codigo' => 'MU128',

				'nombre' => 'Municipalidad de Lago Ranco',
				'codigo_padre' => 'MU',
				 
			),
			62 => 
			array (
				'codigo' => 'MU129',

				'nombre' => 'Municipalidad de Lago Verde',
				'codigo_padre' => 'MU',
				 
			),
			63 => 
			array (
				'codigo' => 'MU130',

				'nombre' => 'Municipalidad de Laguna Blanca',
				'codigo_padre' => 'MU',
				 
			),
			64 => 
			array (
				'codigo' => 'MU131',

				'nombre' => 'Municipalidad de Laja',
				'codigo_padre' => 'MU',
				 
			),
			65 => 
			array (
				'codigo' => 'MU132',

				'nombre' => 'Municipalidad de Lampa',
				'codigo_padre' => 'MU',
				 
			),
			66 => 
			array (
				'codigo' => 'MU133',

				'nombre' => 'Municipalidad de Lanco',
				'codigo_padre' => 'MU',
				 
			),
			67 => 
			array (
				'codigo' => 'MU134',

				'nombre' => 'Municipalidad de Las Cabras',
				'codigo_padre' => 'MU',
				 
			),
			68 => 
			array (
				'codigo' => 'MU135',

				'nombre' => 'Municipalidad de Las Condes',
				'codigo_padre' => 'MU',
				 
			),
			69 => 
			array (
				'codigo' => 'MU136',

				'nombre' => 'Municipalidad de Lautaro',
				'codigo_padre' => 'MU',
				 
			),
			70 => 
			array (
				'codigo' => 'MU137',

				'nombre' => 'Municipalidad de Lebu',
				'codigo_padre' => 'MU',
				 
			),
			71 => 
			array (
				'codigo' => 'MU138',

				'nombre' => 'Municipalidad de Licantén',
				'codigo_padre' => 'MU',
				 
			),
			72 => 
			array (
				'codigo' => 'MU139',

				'nombre' => 'Municipalidad de Limache',
				'codigo_padre' => 'MU',
				 
			),
			73 => 
			array (
				'codigo' => 'MU140',

				'nombre' => 'Municipalidad de Linares',
				'codigo_padre' => 'MU',
				 
			),
			74 => 
			array (
				'codigo' => 'MU141',

				'nombre' => 'Municipalidad de Litueche',
				'codigo_padre' => 'MU',
				 
			),
			75 => 
			array (
				'codigo' => 'MU142',

				'nombre' => 'Municipalidad de Llanquihue',
				'codigo_padre' => 'MU',
				 
			),
			76 => 
			array (
				'codigo' => 'MU143',

				'nombre' => 'Municipalidad de Llay Llay',
				'codigo_padre' => 'MU',
				 
			),
			77 => 
			array (
				'codigo' => 'MU144',

				'nombre' => 'Municipalidad de Lo Barnechea',
				'codigo_padre' => 'MU',
				 
			),
			78 => 
			array (
				'codigo' => 'MU145',

				'nombre' => 'Municipalidad de Lo Espejo',
				'codigo_padre' => 'MU',
				 
			),
			79 => 
			array (
				'codigo' => 'MU146',

				'nombre' => 'Municipalidad de Lo Prado',
				'codigo_padre' => 'MU',
				 
			),
			80 => 
			array (
				'codigo' => 'MU147',

				'nombre' => 'Municipalidad de Lolol',
				'codigo_padre' => 'MU',
				 
			),
			81 => 
			array (
				'codigo' => 'MU148',

				'nombre' => 'Municipalidad de Loncoche',
				'codigo_padre' => 'MU',
				 
			),
			82 => 
			array (
				'codigo' => 'MU149',

				'nombre' => 'Municipalidad de Longaví',
				'codigo_padre' => 'MU',
				 
			),
			83 => 
			array (
				'codigo' => 'MU150',

				'nombre' => 'Municipalidad de Lonquimay',
				'codigo_padre' => 'MU',
				 
			),
			84 => 
			array (
				'codigo' => 'MU151',

				'nombre' => 'Municipalidad de Los Alamos',
				'codigo_padre' => 'MU',
				 
			),
			85 => 
			array (
				'codigo' => 'MU152',

				'nombre' => 'Municipalidad de Los Andes',
				'codigo_padre' => 'MU',
				 
			),
			86 => 
			array (
				'codigo' => 'MU153',

				'nombre' => 'Municipalidad de Los Angeles',
				'codigo_padre' => 'MU',
				 
			),
			87 => 
			array (
				'codigo' => 'MU154',

				'nombre' => 'Municipalidad de Los Lagos',
				'codigo_padre' => 'MU',
				 
			),
			88 => 
			array (
				'codigo' => 'MU155',

				'nombre' => 'Municipalidad de Los Muermos',
				'codigo_padre' => 'MU',
				 
			),
			89 => 
			array (
				'codigo' => 'MU156',

				'nombre' => 'Municipalidad de Los Sauces',
				'codigo_padre' => 'MU',
				 
			),
			90 => 
			array (
				'codigo' => 'MU157',

				'nombre' => 'Municipalidad de Los Vilos',
				'codigo_padre' => 'MU',
				 
			),
			91 => 
			array (
				'codigo' => 'MU158',

				'nombre' => 'Municipalidad de Lota',
				'codigo_padre' => 'MU',
				 
			),
			92 => 
			array (
				'codigo' => 'MU159',

				'nombre' => 'Municipalidad de Lumaco',
				'codigo_padre' => 'MU',
				 
			),
			93 => 
			array (
				'codigo' => 'MU160',

				'nombre' => 'Municipalidad de Machalí',
				'codigo_padre' => 'MU',
				 
			),
			94 => 
			array (
				'codigo' => 'MU161',

				'nombre' => 'Municipalidad de Macul',
				'codigo_padre' => 'MU',
				 
			),
			95 => 
			array (
				'codigo' => 'MU162',

				'nombre' => 'Municipalidad de Máfil',
				'codigo_padre' => 'MU',
				 
			),
			96 => 
			array (
				'codigo' => 'MU163',

				'nombre' => 'Municipalidad de Maipú',
				'codigo_padre' => 'MU',
				 
			),
			97 => 
			array (
				'codigo' => 'MU164',

				'nombre' => 'Municipalidad de Malloa',
				'codigo_padre' => 'MU',
				 
			),
			98 => 
			array (
				'codigo' => 'MU165',

				'nombre' => 'Municipalidad de Marchihue',
				'codigo_padre' => 'MU',
				 
			),
			99 => 
			array (
				'codigo' => 'MU166',

				'nombre' => 'Municipalidad de María Elena',
				'codigo_padre' => 'MU',
				 
			),
			100 => 
			array (
				'codigo' => 'MU167',

				'nombre' => 'Municipalidad de María Pinto',
				'codigo_padre' => 'MU',
				 
			),
			101 => 
			array (
				'codigo' => 'MU168',

				'nombre' => 'Municipalidad de Mariquina',
				'codigo_padre' => 'MU',
				 
			),
			102 => 
			array (
				'codigo' => 'MU169',

				'nombre' => 'Municipalidad de Maule',
				'codigo_padre' => 'MU',
				 
			),
			103 => 
			array (
				'codigo' => 'MU170',

				'nombre' => 'Municipalidad de Maullín',
				'codigo_padre' => 'MU',
				 
			),
			104 => 
			array (
				'codigo' => 'MU171',

				'nombre' => 'Municipalidad de Mejillones',
				'codigo_padre' => 'MU',
				 
			),
			105 => 
			array (
				'codigo' => 'MU172',

				'nombre' => 'Municipalidad de Melipeuco',
				'codigo_padre' => 'MU',
				 
			),
			106 => 
			array (
				'codigo' => 'MU173',

				'nombre' => 'Municipalidad de Melipilla',
				'codigo_padre' => 'MU',
				 
			),
			107 => 
			array (
				'codigo' => 'MU174',

				'nombre' => 'Municipalidad de Molina',
				'codigo_padre' => 'MU',
				 
			),
			108 => 
			array (
				'codigo' => 'MU175',

				'nombre' => 'Municipalidad de Monte Patria',
				'codigo_padre' => 'MU',
				 
			),
			109 => 
			array (
				'codigo' => 'MU176',

				'nombre' => 'Municipalidad de Mostazal',
				'codigo_padre' => 'MU',
				 
			),
			110 => 
			array (
				'codigo' => 'MU177',

				'nombre' => 'Municipalidad de Mulchén',
				'codigo_padre' => 'MU',
				 
			),
			111 => 
			array (
				'codigo' => 'MU178',

				'nombre' => 'Municipalidad de Nacimiento',
				'codigo_padre' => 'MU',
				 
			),
			112 => 
			array (
				'codigo' => 'MU179',

				'nombre' => 'Municipalidad de Nancagua',
				'codigo_padre' => 'MU',
				 
			),
			113 => 
			array (
				'codigo' => 'MU180',

				'nombre' => 'Municipalidad de Navidad',
				'codigo_padre' => 'MU',
				 
			),
			114 => 
			array (
				'codigo' => 'MU181',

				'nombre' => 'Municipalidad de Negrete',
				'codigo_padre' => 'MU',
				 
			),
			115 => 
			array (
				'codigo' => 'MU182',

				'nombre' => 'Municipalidad de Ninhue',
				'codigo_padre' => 'MU',
				 
			),
			116 => 
			array (
				'codigo' => 'MU183',

				'nombre' => 'Municipalidad de Nogales',
				'codigo_padre' => 'MU',
				 
			),
			117 => 
			array (
				'codigo' => 'MU184',

				'nombre' => 'Municipalidad de Nueva Imperial',
				'codigo_padre' => 'MU',
				 
			),
			118 => 
			array (
				'codigo' => 'MU185',

				'nombre' => 'Municipalidad de Ñiquén',
				'codigo_padre' => 'MU',
				 
			),
			119 => 
			array (
				'codigo' => 'MU186',

				'nombre' => 'Municipalidad de Ñuñoa',
				'codigo_padre' => 'MU',
				 
			),
			120 => 
			array (
				'codigo' => 'MU187',

				'nombre' => 'Municipalidad de O\'higgins',
				'codigo_padre' => 'MU',
				 
			),
			121 => 
			array (
				'codigo' => 'MU188',

				'nombre' => 'Municipalidad de Olivar',
				'codigo_padre' => 'MU',
				 
			),
			122 => 
			array (
				'codigo' => 'MU189',

				'nombre' => 'Municipalidad de Ollagüe',
				'codigo_padre' => 'MU',
				 
			),
			123 => 
			array (
				'codigo' => 'MU190',

				'nombre' => 'Municipalidad de Olmué',
				'codigo_padre' => 'MU',
				 
			),
			124 => 
			array (
				'codigo' => 'MU191',

				'nombre' => 'Municipalidad de Osorno',
				'codigo_padre' => 'MU',
				 
			),
			125 => 
			array (
				'codigo' => 'MU192',

				'nombre' => 'Municipalidad de Ovalle',
				'codigo_padre' => 'MU',
				 
			),
			126 => 
			array (
				'codigo' => 'MU193',

				'nombre' => 'Municipalidad de Padre Hurtado',
				'codigo_padre' => 'MU',
				 
			),
			127 => 
			array (
				'codigo' => 'MU194',

				'nombre' => 'Municipalidad de Padre Las Casas',
				'codigo_padre' => 'MU',
				 
			),
			128 => 
			array (
				'codigo' => 'MU195',

				'nombre' => 'Municipalidad de Paiguano',
				'codigo_padre' => 'MU',
				 
			),
			129 => 
			array (
				'codigo' => 'MU196',

				'nombre' => 'Municipalidad de Paillaco',
				'codigo_padre' => 'MU',
				 
			),
			130 => 
			array (
				'codigo' => 'MU197',

				'nombre' => 'Municipalidad de Paine',
				'codigo_padre' => 'MU',
				 
			),
			131 => 
			array (
				'codigo' => 'MU198',

				'nombre' => 'Municipalidad de Palena',
				'codigo_padre' => 'MU',
				 
			),
			132 => 
			array (
				'codigo' => 'MU199',

				'nombre' => 'Municipalidad de Palmilla',
				'codigo_padre' => 'MU',
				 
			),
			133 => 
			array (
				'codigo' => 'MU200',

				'nombre' => 'Municipalidad de Panguipulli',
				'codigo_padre' => 'MU',
				 
			),
			134 => 
			array (
				'codigo' => 'MU201',

				'nombre' => 'Municipalidad de Panquehue',
				'codigo_padre' => 'MU',
				 
			),
			135 => 
			array (
				'codigo' => 'MU202',

				'nombre' => 'Municipalidad de Papudo',
				'codigo_padre' => 'MU',
				 
			),
			136 => 
			array (
				'codigo' => 'MU203',

				'nombre' => 'Municipalidad de Paredones',
				'codigo_padre' => 'MU',
				 
			),
			137 => 
			array (
				'codigo' => 'MU204',

				'nombre' => 'Municipalidad de Parral',
				'codigo_padre' => 'MU',
				 
			),
			138 => 
			array (
				'codigo' => 'MU205',

				'nombre' => 'Municipalidad de Pedro Aguirre Cerda',
				'codigo_padre' => 'MU',
				 
			),
			139 => 
			array (
				'codigo' => 'MU206',

				'nombre' => 'Municipalidad de Pelarco',
				'codigo_padre' => 'MU',
				 
			),
			140 => 
			array (
				'codigo' => 'MU207',

				'nombre' => 'Municipalidad de Pelluhue',
				'codigo_padre' => 'MU',
				 
			),
			141 => 
			array (
				'codigo' => 'MU208',

				'nombre' => 'Municipalidad de Pemuco',
				'codigo_padre' => 'MU',
				 
			),
			142 => 
			array (
				'codigo' => 'MU209',

				'nombre' => 'Municipalidad de Pencahue',
				'codigo_padre' => 'MU',
				 
			),
			143 => 
			array (
				'codigo' => 'MU210',

				'nombre' => 'Municipalidad de Penco',
				'codigo_padre' => 'MU',
				 
			),
			144 => 
			array (
				'codigo' => 'MU211',

				'nombre' => 'Municipalidad de Peñaflor',
				'codigo_padre' => 'MU',
				 
			),
			145 => 
			array (
				'codigo' => 'MU212',

				'nombre' => 'Municipalidad de Peñalolén',
				'codigo_padre' => 'MU',
				 
			),
			146 => 
			array (
				'codigo' => 'MU213',

				'nombre' => 'Municipalidad de Peralillo',
				'codigo_padre' => 'MU',
				 
			),
			147 => 
			array (
				'codigo' => 'MU214',

				'nombre' => 'Municipalidad de Perquenco',
				'codigo_padre' => 'MU',
				 
			),
			148 => 
			array (
				'codigo' => 'MU215',

				'nombre' => 'Municipalidad de Petorca',
				'codigo_padre' => 'MU',
				 
			),
			149 => 
			array (
				'codigo' => 'MU216',

				'nombre' => 'Municipalidad de Peumo',
				'codigo_padre' => 'MU',
				 
			),
			150 => 
			array (
				'codigo' => 'MU217',

				'nombre' => 'Municipalidad de Pica',
				'codigo_padre' => 'MU',
				 
			),
			151 => 
			array (
				'codigo' => 'MU218',

				'nombre' => 'Municipalidad de Pichidegua',
				'codigo_padre' => 'MU',
				 
			),
			152 => 
			array (
				'codigo' => 'MU219',

				'nombre' => 'Municipalidad de Pichilemu',
				'codigo_padre' => 'MU',
				 
			),
			153 => 
			array (
				'codigo' => 'MU220',

				'nombre' => 'Municipalidad de Pinto',
				'codigo_padre' => 'MU',
				 
			),
			154 => 
			array (
				'codigo' => 'MU221',

				'nombre' => 'Municipalidad de Pirque',
				'codigo_padre' => 'MU',
				 
			),
			155 => 
			array (
				'codigo' => 'MU222',

				'nombre' => 'Municipalidad de Pitrufquén',
				'codigo_padre' => 'MU',
				 
			),
			156 => 
			array (
				'codigo' => 'MU223',

				'nombre' => 'Municipalidad de Placilla',
				'codigo_padre' => 'MU',
				 
			),
			157 => 
			array (
				'codigo' => 'MU224',

				'nombre' => 'Municipalidad de Portezuelo',
				'codigo_padre' => 'MU',
				 
			),
			158 => 
			array (
				'codigo' => 'MU225',

				'nombre' => 'Municipalidad de Porvenir',
				'codigo_padre' => 'MU',
				 
			),
			159 => 
			array (
				'codigo' => 'MU226',

				'nombre' => 'Municipalidad de Pozo Almonte',
				'codigo_padre' => 'MU',
				 
			),
			160 => 
			array (
				'codigo' => 'MU227',

				'nombre' => 'Municipalidad de Primavera',
				'codigo_padre' => 'MU',
				 
			),
			161 => 
			array (
				'codigo' => 'MU228',

				'nombre' => 'Municipalidad de Providencia',
				'codigo_padre' => 'MU',
				 
			),
			162 => 
			array (
				'codigo' => 'MU229',

				'nombre' => 'Municipalidad de Puchuncaví',
				'codigo_padre' => 'MU',
				 
			),
			163 => 
			array (
				'codigo' => 'MU230',

				'nombre' => 'Municipalidad de Pucón',
				'codigo_padre' => 'MU',
				 
			),
			164 => 
			array (
				'codigo' => 'MU231',

				'nombre' => 'Municipalidad de Pudahuel',
				'codigo_padre' => 'MU',
				 
			),
			165 => 
			array (
				'codigo' => 'MU232',

				'nombre' => 'Municipalidad de Puente Alto',
				'codigo_padre' => 'MU',
				 
			),
			166 => 
			array (
				'codigo' => 'MU233',

				'nombre' => 'Municipalidad de Puerto Montt',
				'codigo_padre' => 'MU',
				 
			),
			167 => 
			array (
				'codigo' => 'MU234',

				'nombre' => 'Municipalidad de Puerto Natales',
				'codigo_padre' => 'MU',
				 
			),
			168 => 
			array (
				'codigo' => 'MU235',

				'nombre' => 'Municipalidad de Puerto Octay',
				'codigo_padre' => 'MU',
				 
			),
			169 => 
			array (
				'codigo' => 'MU236',

				'nombre' => 'Municipalidad de Puerto Varas',
				'codigo_padre' => 'MU',
				 
			),
			170 => 
			array (
				'codigo' => 'MU237',

				'nombre' => 'Municipalidad de Pumanque',
				'codigo_padre' => 'MU',
				 
			),
			171 => 
			array (
				'codigo' => 'MU238',

				'nombre' => 'Municipalidad de Punitaqui',
				'codigo_padre' => 'MU',
				 
			),
			172 => 
			array (
				'codigo' => 'MU239',

				'nombre' => 'Municipalidad de Punta Arenas',
				'codigo_padre' => 'MU',
				 
			),
			173 => 
			array (
				'codigo' => 'MU240',

				'nombre' => 'Municipalidad de Puqueldón',
				'codigo_padre' => 'MU',
				 
			),
			174 => 
			array (
				'codigo' => 'MU241',

				'nombre' => 'Municipalidad de Purén',
				'codigo_padre' => 'MU',
				 
			),
			175 => 
			array (
				'codigo' => 'MU242',

				'nombre' => 'Municipalidad de Purranque',
				'codigo_padre' => 'MU',
				 
			),
			176 => 
			array (
				'codigo' => 'MU243',

				'nombre' => 'Municipalidad de Putaendo',
				'codigo_padre' => 'MU',
				 
			),
			177 => 
			array (
				'codigo' => 'MU244',

				'nombre' => 'Municipalidad de Putre',
				'codigo_padre' => 'MU',
				 
			),
			178 => 
			array (
				'codigo' => 'MU245',

				'nombre' => 'Municipalidad de Puyehue',
				'codigo_padre' => 'MU',
				 
			),
			179 => 
			array (
				'codigo' => 'MU246',

				'nombre' => 'Municipalidad de Queilén',
				'codigo_padre' => 'MU',
				 
			),
			180 => 
			array (
				'codigo' => 'MU247',

				'nombre' => 'Municipalidad de Quellón',
				'codigo_padre' => 'MU',
				 
			),
			181 => 
			array (
				'codigo' => 'MU248',

				'nombre' => 'Municipalidad de Quemchi',
				'codigo_padre' => 'MU',
				 
			),
			182 => 
			array (
				'codigo' => 'MU249',

				'nombre' => 'Municipalidad de Quilaco',
				'codigo_padre' => 'MU',
				 
			),
			183 => 
			array (
				'codigo' => 'MU250',

				'nombre' => 'Municipalidad de Quilicura',
				'codigo_padre' => 'MU',
				 
			),
			184 => 
			array (
				'codigo' => 'MU251',

				'nombre' => 'Municipalidad de Quilleco',
				'codigo_padre' => 'MU',
				 
			),
			185 => 
			array (
				'codigo' => 'MU252',

				'nombre' => 'Municipalidad de Quillón',
				'codigo_padre' => 'MU',
				 
			),
			186 => 
			array (
				'codigo' => 'MU253',

				'nombre' => 'Municipalidad de Quillota',
				'codigo_padre' => 'MU',
				 
			),
			187 => 
			array (
				'codigo' => 'MU254',

				'nombre' => 'Municipalidad de Quilpué',
				'codigo_padre' => 'MU',
				 
			),
			188 => 
			array (
				'codigo' => 'MU255',

				'nombre' => 'Municipalidad de Quinchao',
				'codigo_padre' => 'MU',
				 
			),
			189 => 
			array (
				'codigo' => 'MU256',

				'nombre' => 'Municipalidad de Quinta de Tilcoco',
				'codigo_padre' => 'MU',
				 
			),
			190 => 
			array (
				'codigo' => 'MU257',

				'nombre' => 'Municipalidad de Quinta Normal',
				'codigo_padre' => 'MU',
				 
			),
			191 => 
			array (
				'codigo' => 'MU258',

				'nombre' => 'Municipalidad de Quintero',
				'codigo_padre' => 'MU',
				 
			),
			192 => 
			array (
				'codigo' => 'MU259',

				'nombre' => 'Municipalidad de Quirihue',
				'codigo_padre' => 'MU',
				 
			),
			193 => 
			array (
				'codigo' => 'MU260',

				'nombre' => 'Municipalidad de Rancagua',
				'codigo_padre' => 'MU',
				 
			),
			194 => 
			array (
				'codigo' => 'MU261',

				'nombre' => 'Municipalidad de Ránquil',
				'codigo_padre' => 'MU',
				 
			),
			195 => 
			array (
				'codigo' => 'MU262',

				'nombre' => 'Municipalidad de Rauco',
				'codigo_padre' => 'MU',
				 
			),
			196 => 
			array (
				'codigo' => 'MU263',

				'nombre' => 'Municipalidad de Recoleta',
				'codigo_padre' => 'MU',
				 
			),
			197 => 
			array (
				'codigo' => 'MU264',

				'nombre' => 'Municipalidad de Renaico',
				'codigo_padre' => 'MU',
				 
			),
			198 => 
			array (
				'codigo' => 'MU265',

				'nombre' => 'Municipalidad de Renca',
				'codigo_padre' => 'MU',
				 
			),
			199 => 
			array (
				'codigo' => 'MU266',

				'nombre' => 'Municipalidad de Rengo',
				'codigo_padre' => 'MU',
				 
			),
			200 => 
			array (
				'codigo' => 'MU267',

				'nombre' => 'Municipalidad de Requínoa',
				'codigo_padre' => 'MU',
				 
			),
			201 => 
			array (
				'codigo' => 'MU268',

				'nombre' => 'Municipalidad de Retiro',
				'codigo_padre' => 'MU',
				 
			),
			202 => 
			array (
				'codigo' => 'MU269',

				'nombre' => 'Municipalidad de Rinconada',
				'codigo_padre' => 'MU',
				 
			),
			203 => 
			array (
				'codigo' => 'MU270',

				'nombre' => 'Municipalidad de Rio Bueno',
				'codigo_padre' => 'MU',
				 
			),
			204 => 
			array (
				'codigo' => 'MU271',

				'nombre' => 'Municipalidad de Río Claro',
				'codigo_padre' => 'MU',
				 
			),
			205 => 
			array (
				'codigo' => 'MU272',

				'nombre' => 'Municipalidad de Río Hurtado',
				'codigo_padre' => 'MU',
				 
			),
			206 => 
			array (
				'codigo' => 'MU273',

				'nombre' => 'Municipalidad de Río Ibáñez',
				'codigo_padre' => 'MU',
				 
			),
			207 => 
			array (
				'codigo' => 'MU274',

				'nombre' => 'Municipalidad de Río Negro',
				'codigo_padre' => 'MU',
				 
			),
			208 => 
			array (
				'codigo' => 'MU275',

				'nombre' => 'Municipalidad de Río Verde',
				'codigo_padre' => 'MU',
				 
			),
			209 => 
			array (
				'codigo' => 'MU276',

				'nombre' => 'Municipalidad de Romeral',
				'codigo_padre' => 'MU',
				 
			),
			210 => 
			array (
				'codigo' => 'MU277',

				'nombre' => 'Municipalidad de Saavedra',
				'codigo_padre' => 'MU',
				 
			),
			211 => 
			array (
				'codigo' => 'MU278',

				'nombre' => 'Municipalidad de Sagrada Familia',
				'codigo_padre' => 'MU',
				 
			),
			212 => 
			array (
				'codigo' => 'MU279',

				'nombre' => 'Municipalidad de Salamanca',
				'codigo_padre' => 'MU',
				 
			),
			213 => 
			array (
				'codigo' => 'MU280',

				'nombre' => 'Municipalidad de San Antonio',
				'codigo_padre' => 'MU',
				 
			),
			214 => 
			array (
				'codigo' => 'MU281',

				'nombre' => 'Municipalidad de San Bernardo',
				'codigo_padre' => 'MU',
				 
			),
			215 => 
			array (
				'codigo' => 'MU282',

				'nombre' => 'Municipalidad de San Carlos',
				'codigo_padre' => 'MU',
				 
			),
			216 => 
			array (
				'codigo' => 'MU283',

				'nombre' => 'Municipalidad de San Clemente',
				'codigo_padre' => 'MU',
				 
			),
			217 => 
			array (
				'codigo' => 'MU284',

				'nombre' => 'Municipalidad de San Esteban',
				'codigo_padre' => 'MU',
				 
			),
			218 => 
			array (
				'codigo' => 'MU285',

				'nombre' => 'Municipalidad de San Fabián',
				'codigo_padre' => 'MU',
				 
			),
			219 => 
			array (
				'codigo' => 'MU286',

				'nombre' => 'Municipalidad de San Felipe',
				'codigo_padre' => 'MU',
				 
			),
			220 => 
			array (
				'codigo' => 'MU287',

				'nombre' => 'Municipalidad de San Fernando',
				'codigo_padre' => 'MU',
				 
			),
			221 => 
			array (
				'codigo' => 'MU288',

				'nombre' => 'Municipalidad de San Gregorio',
				'codigo_padre' => 'MU',
				 
			),
			222 => 
			array (
				'codigo' => 'MU289',

				'nombre' => 'Municipalidad de San Ignacio',
				'codigo_padre' => 'MU',
				 
			),
			223 => 
			array (
				'codigo' => 'MU290',

				'nombre' => 'Municipalidad de San Javier',
				'codigo_padre' => 'MU',
				 
			),
			224 => 
			array (
				'codigo' => 'MU291',

				'nombre' => 'Municipalidad de San Joaquín',
				'codigo_padre' => 'MU',
				 
			),
			225 => 
			array (
				'codigo' => 'MU292',

				'nombre' => 'Municipalidad de San José de Maipo',
				'codigo_padre' => 'MU',
				 
			),
			226 => 
			array (
				'codigo' => 'MU293',

				'nombre' => 'Municipalidad de San Juan de la Costa',
				'codigo_padre' => 'MU',
				 
			),
			227 => 
			array (
				'codigo' => 'MU294',

				'nombre' => 'Municipalidad de San Miguel',
				'codigo_padre' => 'MU',
				 
			),
			228 => 
			array (
				'codigo' => 'MU295',

				'nombre' => 'Municipalidad de San Nicolás',
				'codigo_padre' => 'MU',
				 
			),
			229 => 
			array (
				'codigo' => 'MU296',

				'nombre' => 'Municipalidad de San Pablo',
				'codigo_padre' => 'MU',
				 
			),
			230 => 
			array (
				'codigo' => 'MU297',

				'nombre' => 'Municipalidad de San Pedro',
				'codigo_padre' => 'MU',
				 
			),
			231 => 
			array (
				'codigo' => 'MU298',

				'nombre' => 'Municipalidad de San Pedro de Atacama',
				'codigo_padre' => 'MU',
				 
			),
			232 => 
			array (
				'codigo' => 'MU299',

				'nombre' => 'Municipalidad de San Pedro De La Paz',
				'codigo_padre' => 'MU',
				 
			),
			233 => 
			array (
				'codigo' => 'MU300',

				'nombre' => 'Municipalidad de San Rafael',
				'codigo_padre' => 'MU',
				 
			),
			234 => 
			array (
				'codigo' => 'MU301',

				'nombre' => 'Municipalidad de San Ramón',
				'codigo_padre' => 'MU',
				 
			),
			235 => 
			array (
				'codigo' => 'MU302',

				'nombre' => 'Municipalidad de San Rosendo',
				'codigo_padre' => 'MU',
				 
			),
			236 => 
			array (
				'codigo' => 'MU303',

				'nombre' => 'Municipalidad de San Vicente de Tagua Tagua',
				'codigo_padre' => 'MU',
				 
			),
			237 => 
			array (
				'codigo' => 'MU304',

				'nombre' => 'Municipalidad de Santa Bárbara',
				'codigo_padre' => 'MU',
				 
			),
			238 => 
			array (
				'codigo' => 'MU305',

				'nombre' => 'Municipalidad de Santa Cruz',
				'codigo_padre' => 'MU',
				 
			),
			239 => 
			array (
				'codigo' => 'MU306',

				'nombre' => 'Municipalidad de Santa Juana',
				'codigo_padre' => 'MU',
				 
			),
			240 => 
			array (
				'codigo' => 'MU307',

				'nombre' => 'Municipalidad de Santa María',
				'codigo_padre' => 'MU',
				 
			),
			241 => 
			array (
				'codigo' => 'MU308',

				'nombre' => 'Municipalidad de Santiago',
				'codigo_padre' => 'MU',
				 
			),
			242 => 
			array (
				'codigo' => 'MU309',

				'nombre' => 'Municipalidad de Santo Domingo',
				'codigo_padre' => 'MU',
				 
			),
			243 => 
			array (
				'codigo' => 'MU310',

				'nombre' => 'Municipalidad de Sierra Gorda',
				'codigo_padre' => 'MU',
				 
			),
			244 => 
			array (
				'codigo' => 'MU311',

				'nombre' => 'Municipalidad de Talagante',
				'codigo_padre' => 'MU',
				 
			),
			245 => 
			array (
				'codigo' => 'MU312',

				'nombre' => 'Municipalidad de Talca',
				'codigo_padre' => 'MU',
				 
			),
			246 => 
			array (
				'codigo' => 'MU313',

				'nombre' => 'Municipalidad de Talcahuano',
				'codigo_padre' => 'MU',
				 
			),
			247 => 
			array (
				'codigo' => 'MU314',

				'nombre' => 'Municipalidad de Taltal',
				'codigo_padre' => 'MU',
				 
			),
			248 => 
			array (
				'codigo' => 'MU315',

				'nombre' => 'Municipalidad de Temuco',
				'codigo_padre' => 'MU',
				 
			),
			249 => 
			array (
				'codigo' => 'MU316',

				'nombre' => 'Municipalidad de Teno',
				'codigo_padre' => 'MU',
				 
			),
			250 => 
			array (
				'codigo' => 'MU317',

				'nombre' => 'Municipalidad de Teodoro Schmidt',
				'codigo_padre' => 'MU',
				 
			),
			251 => 
			array (
				'codigo' => 'MU318',

				'nombre' => 'Municipalidad de Tierra Amarilla',
				'codigo_padre' => 'MU',
				 
			),
			252 => 
			array (
				'codigo' => 'MU319',

				'nombre' => 'Municipalidad de Tiltil',
				'codigo_padre' => 'MU',
				 
			),
			253 => 
			array (
				'codigo' => 'MU320',

				'nombre' => 'Municipalidad de Timaukel',
				'codigo_padre' => 'MU',
				 
			),
			254 => 
			array (
				'codigo' => 'MU321',

				'nombre' => 'Municipalidad de Tirúa',
				'codigo_padre' => 'MU',
				 
			),
			255 => 
			array (
				'codigo' => 'MU322',

				'nombre' => 'Municipalidad de Tocopilla',
				'codigo_padre' => 'MU',
				 
			),
			256 => 
			array (
				'codigo' => 'MU323',

				'nombre' => 'Municipalidad de Toltén',
				'codigo_padre' => 'MU',
				 
			),
			257 => 
			array (
				'codigo' => 'MU324',

				'nombre' => 'Municipalidad de Tome',
				'codigo_padre' => 'MU',
				 
			),
			258 => 
			array (
				'codigo' => 'MU325',

				'nombre' => 'Municipalidad de Torres del Paine',
				'codigo_padre' => 'MU',
				 
			),
			259 => 
			array (
				'codigo' => 'MU326',

				'nombre' => 'Municipalidad de Tortel',
				'codigo_padre' => 'MU',
				 
			),
			260 => 
			array (
				'codigo' => 'MU327',

				'nombre' => 'Municipalidad de Traiguén',
				'codigo_padre' => 'MU',
				 
			),
			261 => 
			array (
				'codigo' => 'MU328',

				'nombre' => 'Municipalidad de Treguaco',
				'codigo_padre' => 'MU',
				 
			),
			262 => 
			array (
				'codigo' => 'MU329',

				'nombre' => 'Municipalidad de Tucapel',
				'codigo_padre' => 'MU',
				 
			),
			263 => 
			array (
				'codigo' => 'MU330',

				'nombre' => 'Municipalidad de Valdivia',
				'codigo_padre' => 'MU',
				 
			),
			264 => 
			array (
				'codigo' => 'MU331',

				'nombre' => 'Municipalidad de Vallenar',
				'codigo_padre' => 'MU',
				 
			),
			265 => 
			array (
				'codigo' => 'MU332',

				'nombre' => 'Municipalidad de Valparaíso',
				'codigo_padre' => 'MU',
				 
			),
			266 => 
			array (
				'codigo' => 'MU333',

				'nombre' => 'Municipalidad de Vichuquén',
				'codigo_padre' => 'MU',
				 
			),
			267 => 
			array (
				'codigo' => 'MU334',

				'nombre' => 'Municipalidad de Victoria',
				'codigo_padre' => 'MU',
				 
			),
			268 => 
			array (
				'codigo' => 'MU335',

				'nombre' => 'Municipalidad de Vicuña',
				'codigo_padre' => 'MU',
				 
			),
			269 => 
			array (
				'codigo' => 'MU336',

				'nombre' => 'Municipalidad de Vilcún',
				'codigo_padre' => 'MU',
				 
			),
			270 => 
			array (
				'codigo' => 'MU337',

				'nombre' => 'Municipalidad de Villa Alegre',
				'codigo_padre' => 'MU',
				 
			),
			271 => 
			array (
				'codigo' => 'MU338',

				'nombre' => 'Municipalidad de Villa Alemana',
				'codigo_padre' => 'MU',
				 
			),
			272 => 
			array (
				'codigo' => 'MU339',

				'nombre' => 'Municipalidad de Villarrica',
				'codigo_padre' => 'MU',
				 
			),
			273 => 
			array (
				'codigo' => 'MU340',

				'nombre' => 'Municipalidad de Viña del Mar',
				'codigo_padre' => 'MU',
				 
			),
			274 => 
			array (
				'codigo' => 'MU341',

				'nombre' => 'Municipalidad de Vitacura',
				'codigo_padre' => 'MU',
				 
			),
			275 => 
			array (
				'codigo' => 'MU342',

				'nombre' => 'Municipalidad de Yerbas Buenas',
				'codigo_padre' => 'MU',
				 
			),
			276 => 
			array (
				'codigo' => 'MU343',

				'nombre' => 'Municipalidad de Yumbel',
				'codigo_padre' => 'MU',
				 
			),
			277 => 
			array (
				'codigo' => 'MU344',

				'nombre' => 'Municipalidad de Yungay',
				'codigo_padre' => 'MU',
				 
			),
			278 => 
			array (
				'codigo' => 'MU345',

				'nombre' => 'Municipalidad de Zapallar',
				'codigo_padre' => 'MU',
				 
			)*/

		));
	}

}
