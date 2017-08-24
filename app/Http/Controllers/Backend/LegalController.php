<?php
namespace App\Http\Controllers\Backend;
use View;
use Input;
use Acta;
use Response;
use Legal;
use LegalDocumentoTomaRazon;
use LegalJuicioPendiente;
use LegalProyectoLeyTramitacion;
use LegalRequerimientoRespuesta;
use LegalSumarioInvestigacion;

class LegalController extends \BaseController {

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Nueva acta
		return View::make('backend.actas.legal');
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
		$acta->institucion_id = \Auth::user()->institucion_id;
		$acta->save();
		$datos = Input::all();


		$legal = new Legal;
		$legal->estado = 'borrador';
		$legal->acta_id = $acta->id;
		$legal->save();

		foreach($datos['documentos'] as $data_documento){
			if(isset($data_documento['id']))
				$documento = LegalDocumentoTomaRazon::find($data_documento['id']);
			else
				$documento = new LegalDocumentoTomaRazon;
			$documento->nombre 			= $data_documento['nombre'];
			$documento->fecha_ingreso 	= $data_documento['fecha_ingreso'];
			$documento->estado 			= $data_documento['estado'];
			$documento->acta_id 		= $acta->id;
			$documento->save();
		}

		foreach($datos['proyectos'] as $data_proyecto){
			if(isset($data_proyecto['id']))
				$proyecto = LegalProyectoLeyTramitacion::find($data_proyecto['id']);
			else
				$proyecto = new LegalProyectoLeyTramitacion;
			$proyecto->nombre 			= $data_proyecto['nombre'];
			$proyecto->fecha_ingreso 	= $data_proyecto['fecha_ingreso'];
			$proyecto->estado 			= $data_proyecto['estado'];
			$proyecto->acta_id 			= $acta->id;
			$proyecto->save();
		}

		foreach($datos['juicios'] as $data_juicio){
			if(isset($data_juicio['id']))
				$juicio = LegalJuicioPendiente::find($data_juicio['id']);
			else
				$juicio = new LegalJuicioPendiente;
			$juicio->materia 		= $data_juicio['materia'];
			$juicio->numero_causa 	= $data_juicio['numero_causa'];
			$juicio->anio 			= $data_juicio['anio'];
			$juicio->tribunal 		= $data_juicio['tribunal'];
			$juicio->sede 			= $data_juicio['sede'];
			$juicio->naturaleza 	= $data_juicio['naturaleza'];
			$juicio->instancia 		= $data_juicio['instancia'];
			$juicio->acta_id 		= $acta->id;
			$juicio->save();
		}

		foreach($datos['sumarios'] as $data_sumario){
			if(isset($data_sumario['id']))
				$sumario = LegalSumarioInvestigacion::find($data_sumario['id']);
			else
				$sumario = new LegalSumarioInvestigacion;
			$sumario->tipo 				= $data_sumario['tipo'];
			$sumario->numero_resolucion = $data_sumario['numero_resolucion'];
			$sumario->fecha_resolucion 	= $data_sumario['fecha_resolucion'];
			$sumario->estado_proceso 	= $data_sumario['estado_proceso'];
			$sumario->acta_id 			= $acta->id;
			$sumario->save();
		}

		foreach($datos['requerimientos'] as $data_requerimiento){
			if(isset($data_requerimiento['id']))
				$requerimiento = LegalRequerimientoRespuesta::find($data_requerimiento['id']);
			else
				$requerimiento = new LegalRequerimientoRespuesta;
			$requerimiento->institucion 			= $data_requerimiento['institucion'];
			$requerimiento->identificacion_documento = $data_requerimiento['identificacion_documento'];
			$requerimiento->fecha_documento 		= $data_requerimiento['fecha_documento'];
			$requerimiento->materia 				= $data_requerimiento['materia'];
			$requerimiento->estado 					= $data_requerimiento['estado'];
			$requerimiento->acta_id 				= $acta->id;
			$requerimiento->save();
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


		return View::make('backend.actas.legal', array('acta_id' => $id));
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
		$legal 			= Legal::where('acta_id', '=', $id)->get();
		$documentos 	= LegalDocumentoTomaRazon::where('acta_id', '=', $id)->get();
		$proyectos 		= LegalProyectoLeyTramitacion::where('acta_id', '=', $id)->get();
		$juicios 		= LegalJuicioPendiente::where('acta_id', '=', $id)->get();
		$sumarios 		= LegalSumarioInvestigacion::where('acta_id', '=', $id)->get();
		$requerimientos = LegalRequerimientoRespuesta::where('acta_id', '=', $id)->get();

		return Response::json(array(
					'legal'=>$legal,
					'documentos'=>$documentos,
					'proyectos'=>$proyectos,
					'juicios'=>$juicios,
					'sumarios'=>$sumarios,
					'requerimientos'=>$requerimientos
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

		$data_documento_existente 		= LegalDocumentoTomaRazon::where('acta_id',$acta->id)->get()->lists('id');
		$array_no_modificados_documento = array();

		foreach($datos['documentos'] as $data_documento){
			if(isset($data_documento['id'])){
				$documento = LegalDocumentoTomaRazon::find($data_documento['id']);
				array_push($array_no_modificados_documento,$data_documento['id']);
			}
			else
				$documento = new LegalDocumentoTomaRazon;
			$documento->nombre 			= $data_documento['nombre'];
			$documento->fecha_ingreso 	= $data_documento['fecha_ingreso'];
			$documento->estado 			= $data_documento['estado'];
			$documento->acta_id 		= $acta->id;
			$documento->save();
		}

		$resultado = array_diff($data_documento_existente, $array_no_modificados_documento);
		LegalDocumentoTomaRazon::whereIn('id',$resultado)->delete();


		$data_proyecto_existente 		= LegalProyectoLeyTramitacion::where('acta_id',$acta->id)->get()->lists('id');
		$array_no_modificados_proyecto 	= array();
		foreach($datos['proyectos'] as $data_proyecto){
			if(isset($data_proyecto['id'])){
				$proyecto = LegalProyectoLeyTramitacion::find($data_proyecto['id']);
				array_push($array_no_modificados_proyecto,$data_proyecto['id']);
			}
			else
				$proyecto = new LegalProyectoLeyTramitacion;
			$proyecto->nombre 			= $data_proyecto['nombre'];
			$proyecto->fecha_ingreso 	= $data_proyecto['fecha_ingreso'];
			$proyecto->estado 			= $data_proyecto['estado'];
			$proyecto->acta_id 			= $acta->id;
			$proyecto->save();
		}
		$resultado = array_diff($data_proyecto_existente, $array_no_modificados_proyecto);
		LegalProyectoLeyTramitacion::whereIn('id',$resultado)->delete();

		$data_juicio_existente 			= LegalJuicioPendiente::where('acta_id',$acta->id)->get()->lists('id');
		$array_no_modificados_juicio	= array();
		foreach($datos['juicios'] as $data_juicio){
			if(isset($data_juicio['id'])){
				$juicio = LegalJuicioPendiente::find($data_juicio['id']);
				array_push($array_no_modificados_juicio,$data_juicio['id']);
			}
			else
				$juicio = new LegalJuicioPendiente;
			$juicio->materia 		= $data_juicio['materia'];
			$juicio->numero_causa 	= $data_juicio['numero_causa'];
			$juicio->anio 			= $data_juicio['anio'];
			$juicio->tribunal 		= $data_juicio['tribunal'];
			$juicio->sede 			= $data_juicio['sede'];
			$juicio->naturaleza 	= $data_juicio['naturaleza'];
			$juicio->instancia 		= $data_juicio['instancia'];
			$juicio->acta_id 		= $acta->id;
			$juicio->save();
		}
		$resultado = array_diff($data_juicio_existente, $array_no_modificados_juicio);
		LegalJuicioPendiente::whereIn('id',$resultado)->delete();

		$data_sumario_existente 		= LegalSumarioInvestigacion::where('acta_id',$acta->id)->get()->lists('id');
		$array_no_modificados_sumario	= array();
		foreach($datos['sumarios'] as $data_sumario){
			if(isset($data_sumario['id'])){
				$sumario = LegalSumarioInvestigacion::find($data_sumario['id']);
				array_push($array_no_modificados_sumario,$data_sumario['id']);
			}
			else
				$sumario = new LegalSumarioInvestigacion;
			$sumario->tipo 				= $data_sumario['tipo'];
			$sumario->numero_resolucion = $data_sumario['numero_resolucion'];
			$sumario->fecha_resolucion 	= $data_sumario['fecha_resolucion'];
			$sumario->estado_proceso 	= $data_sumario['estado_proceso'];
			$sumario->acta_id 			= $acta->id;
			$sumario->save();
		}
		$resultado = array_diff($data_sumario_existente, $array_no_modificados_sumario);
		LegalSumarioInvestigacion::whereIn('id',$resultado)->delete();

		$data_requerimiento_existente 		= LegalRequerimientoRespuesta::where('acta_id',$acta->id)->get()->lists('id');
		$array_no_modificados_requerimiento	= array();
		foreach($datos['requerimientos'] as $data_requerimiento){
			if(isset($data_requerimiento['id'])){
				$requerimiento = LegalRequerimientoRespuesta::find($data_requerimiento['id']);
				array_push($array_no_modificados_requerimiento,$data_requerimiento['id']);
			}
			else
				$requerimiento = new LegalRequerimientoRespuesta;
			$requerimiento->institucion 			= $data_requerimiento['institucion'];
			$requerimiento->identificacion_documento = $data_requerimiento['identificacion_documento'];
			$requerimiento->fecha_documento 		= $data_requerimiento['fecha_documento'];
			$requerimiento->materia 				= $data_requerimiento['materia'];
			$requerimiento->estado 					= $data_requerimiento['estado'];
			$requerimiento->acta_id 				= $acta->id;
			$requerimiento->save();
		}
		$resultado = array_diff($data_requerimiento_existente, $array_no_modificados_requerimiento);
		LegalRequerimientoRespuesta::whereIn('id',$resultado)->delete();


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