<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use View;
use Input;
use App\Models\Acta;
use App\Models\ParticipacionCiudadana;
use Response;
use Carbon\Carbon;

class ParticipacionController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('backend.actas.participacion');
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
	public function store(Request $request)
	{
		$acta = new Acta();
		$acta->institucion_id = \Auth::user()->institucion_id;
		$acta->save();
		$datos = $request->all();

		$participacion 										= new ParticipacionCiudadana;
		$participacion->enlace_participacion_ciudadana 		= $datos['participacion']['enlace_participacion_ciudadana'];
		$participacion->estado 								= 'borrador';
		$participacion->acta_id 							= $acta->id;
		$participacion->save();

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
		return View::make('backend.actas.participacion');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$participacion = ParticipacionCiudadana::where('acta_id', '=', $id)->get();
		return Response::json(array(
					'participacion'=>$participacion
				));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		
		$acta = Acta::find($id);
		$datos = $request->all();

		if(isset($datos['participacion']['id']))
			$participacion = ParticipacionCiudadana::find($datos['participacion']['id']);
		else
			$participacion = new ParticipacionCiudadana;
		$participacion->enlace_participacion_ciudadana 		= $datos['participacion']['enlace_participacion_ciudadana'];
		$participacion->estado 								= 'borrador';
		$participacion->acta_id 							= $acta->id;
		$participacion->save();
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
