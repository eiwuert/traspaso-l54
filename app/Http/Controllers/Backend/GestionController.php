<?php
namespace App\Http\Controllers\Backend;
use View;
use Input;
use Acta;
use Gestion;
use GestionProgramaProyecto;
use GestionComiteInterministerial;
use GestionPublicacion;
use GestionCompromisoInternacional;
use GestionLicitacion;
use Response;


class GestionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Nueva acta
		return View::make('backend.actas.gestion');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$acta = new Acta();
		$acta->institucion_id = 16;
		$acta->save();
		$datos = Input::all();


		$gestion = new Gestion;
		$gestion->enlace_marco_normativo 			= $datos['gestion']['enlace_marco_normativo'];
		$gestion->enlace_definiciones_estrategicas 	= $datos['gestion']['enlace_definiciones_estrategicas'];
		$gestion->enlace_estructura_organica 		= $datos['gestion']['enlace_estructura_organica'];
		$gestion->enlace_compromisos_gestion 		= $datos['gestion']['enlace_compromisos_gestion'];
		$gestion->enlace_ejecucion_presupuestaria 	= $datos['gestion']['enlace_ejecucion_presupuestaria'];
		$gestion->balance_logros 					= $datos['gestion']['balance_logros'];
		$gestion->estado 							= 'borrador';
		$gestion->acta_id 							= $acta->id;
		$gestion->save();

		foreach($datos['programas'] as $p){
			if(isset($p['id']))
				$programa = GestionProgramaProyecto::find($p['id']);
			else
				$programa = new GestionProgramaProyecto;
			$programa->nombre = $p['nombre'];
			$programa->monto = $p['monto'];
			$programa->etapa = $p['etapa'];
			$programa->acta_id = $acta->id;
			$programa->save();
		}

		foreach($datos['comites'] as $c){
			if(isset($c['id']))
				$comite = GestionComiteInterministerial::find($c['id']);
			else
				$comite = new GestionComiteInterministerial;
			$comite->nombre = $c['nombre'];
			$comite->calidad_participacion = $c['calidad_participacion'];
			$comite->acta_id = $acta->id;
			$comite->save();
		}

		foreach($datos['publicaciones'] as $p){
			if(isset($p['id']))
				$publicacion = GestionPublicacion::find($p['id']);
			else
				$publicacion = new GestionPublicacion;
			$publicacion->nombre = $p['nombre'];
			$publicacion->enlace_publicacion = $p['enlace_publicacion'];
			$publicacion->acta_id = $acta->id;
			$publicacion->save();
		}
		foreach($datos['compromisos'] as $c){
			if(isset($c['id']))
				$compromiso = GestionCompromisoInternacional::find($c['id']);
			else
				$compromiso = new GestionCompromisoInternacional;
			$compromiso->nombre = $c['nombre'];
			$compromiso->calidad_participacion = $c['calidad_participacion'];
			$compromiso->acta_id = $acta->id;
			$compromiso->save();
		}
		foreach($datos['licitaciones'] as $l){
			if(isset($l['id']))
				$licitacion = GestionLicitacion::find($l['id']);
			else
				$licitacion = new GestionLicitacion;
			$licitacion->nombre = $l['nombre'];
			$licitacion->estado = $l['estado'];
			$licitacion->acta_id = $acta->id;
			$licitacion->save();
		}
		return Response::json(array(
					'acta_id'=>$acta->id
				));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//Acta existente


		return View::make('backend.actas.gestion', array('acta_id' => $id));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$gestion = Gestion::where('acta_id', '=', $id)->get();
		$programas = GestionProgramaProyecto::where('acta_id', '=', $id)->get();
		$comites = GestionComiteInterministerial::where('acta_id', '=', $id)->get();
		$publicaciones = GestionPublicacion::where('acta_id', '=', $id)->get();
		$compromisos = GestionCompromisoInternacional::where('acta_id', '=', $id)->get();
		$licitaciones = GestionLicitacion::where('acta_id', '=', $id)->get();
		return Response::json(array(
					'gestion'=>$gestion,
					'programas'=>$programas,
					'comites'=>$comites,
					'publicaciones'=>$publicaciones,
					'compromisos'=>$compromisos,
					'licitaciones'=>$licitaciones
				));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$acta = Acta::find($id);
		$datos = Input::all();

		$gestion = Gestion::find($datos['gestion']['id']);

		$gestion->enlace_marco_normativo 			= $datos['gestion']['enlace_marco_normativo'];
		$gestion->enlace_definiciones_estrategicas 	= $datos['gestion']['enlace_definiciones_estrategicas'];
		$gestion->enlace_estructura_organica 		= $datos['gestion']['enlace_estructura_organica'];
		$gestion->enlace_compromisos_gestion 		= $datos['gestion']['enlace_compromisos_gestion'];
		$gestion->enlace_ejecucion_presupuestaria 	= $datos['gestion']['enlace_ejecucion_presupuestaria'];
		$gestion->balance_logros 					= $datos['gestion']['balance_logros'];
		$gestion->estado 							= 'borrador';
		$gestion->acta_id 							= $id;
		$gestion->save();

		foreach($datos['programas'] as $p){
			if(isset($p['id']))
				$programa = GestionProgramaProyecto::find($p['id']);
			else
				$programa = new GestionProgramaProyecto;
			$programa->nombre = $p['nombre'];
			$programa->monto = $p['monto'];
			$programa->etapa = $p['etapa'];
			$programa->acta_id = $id;
			$programa->save();
		}

		foreach($datos['comites'] as $c){
			if(isset($c['id']))
				$comite = GestionComiteInterministerial::find($c['id']);
			else
				$comite = new GestionComiteInterministerial;
			$comite->nombre = $c['nombre'];
			$comite->calidad_participacion = $c['calidad_participacion'];
			$comite->acta_id = $id;
			$comite->save();
		}

		foreach($datos['publicaciones'] as $p){
			if(isset($p['id']))
				$publicacion = GestionPublicacion::find($p['id']);
			else
				$publicacion = new GestionPublicacion;
			$publicacion->nombre = $p['nombre'];
			$publicacion->enlace_publicacion = $p['enlace_publicacion'];
			$publicacion->acta_id = $id;
			$publicacion->save();
		}
		foreach($datos['compromisos'] as $c){
			if(isset($c['id']))
				$compromiso = GestionCompromisoInternacional::find($c['id']);
			else
				$compromiso = new GestionCompromisoInternacional;
			$compromiso->nombre = $c['nombre'];
			$compromiso->calidad_participacion = $c['calidad_participacion'];
			$compromiso->acta_id = $acta->id;
			$compromiso->save();
		}
		foreach($datos['licitaciones'] as $l){
			if(isset($l['id']))
				$licitacion = GestionLicitacion::find($l['id']);
			else
				$licitacion = new GestionLicitacion;
			$licitacion->nombre = $l['nombre'];
			$licitacion->estado = $l['estado'];
			$licitacion->save();
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
