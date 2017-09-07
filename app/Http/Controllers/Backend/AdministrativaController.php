<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use View;
use Input;
use App\Models\Acta;
use App\Models\Administrativa;
use App\Models\AdministrativaDocumento;
use Response;
use Carbon\Carbon;

class AdministrativaController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('backend.actas.administrativa');
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

		$administrativa 									= new Administrativa;
		$administrativa->enlace_actos 						= $datos['administrativa']['enlace_actos'];
		$administrativa->estado 							= 'borrador';
		$administrativa->acta_id 							= $acta->id;
		$administrativa->save();

		foreach($datos['documentos'] as $n){
			if(isset($n['id']))
				$documento = AdministrativaDocumento::find($n['id']);
			else
				$documento = new AdministrativaDocumento;
			$documento->nombre_documento = $n['nombre_documento'];
			$documento->fecha_ingreso = $n['fecha_ingreso'];
			$documento->estado = $n['estado'];
			$documento->acta_id = $acta->id;
			$documento->save();
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
		return View::make('backend.actas.administrativa');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$administrativa = Administrativa::where('acta_id', '=', $id)->get();
		$documentos = AdministrativaDocumento::where('acta_id', '=', $id)->get();
		return Response::json(array(
					'administrativa'=>$administrativa,
					'documentos'=>$documentos
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

		if(isset($datos['administrativa']['id']))
			$administrativa = Administrativa::find($datos['administrativa']['id']);
		else
			$administrativa = new Administrativa;
		$administrativa->enlace_actos 						= $datos['administrativa']['enlace_actos'];
		$administrativa->estado 							= 'borrador';
		$administrativa->acta_id 							= $acta->id;
		$administrativa->save();

		$array_documentos = AdministrativaDocumento::select('id')->where('acta_id',$acta->id)->pluck('id')->toArray();
		$array_no_documentos = array();
		foreach($datos['documentos'] as $n){
			if(isset($n['id'])){
				$documento = AdministrativaDocumento::find($n['id']);
				array_push($array_no_documentos,$n['id']);
			}else{
				$documento = new AdministrativaDocumento;
			}	
			$documento->nombre_documento = $n['nombre_documento'];
			$date = Carbon::createFromFormat('Y-m-d', $n['fecha_ingreso']);
			//echo $date->format('Y-m-d');
			$documento->fecha_ingreso = $date;
			$documento->estado = $n['estado'];
			$documento->acta_id = $acta->id;
			$documento->save();
		}
		$resultado = array_diff($array_documentos, $array_no_documentos);
		AdministrativaDocumento::whereIn('id',$resultado)->delete();
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
