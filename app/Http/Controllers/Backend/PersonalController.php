<?php

namespace App\Http\Controllers\Backend;
use View;
use Input;
use Acta;
use Personal;
use PersonalNombramiento;
use Response;

class PersonalController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('backend.actas.personal');
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


		$personal = Personal::find($datos['Personal']['id']);
		$personal->enlace_dotacion_personal			= $datos['personal']['enlace_dotacion_personal'];
		$personal->estado 							= 'borrador';
		$personal->acta_id 							= $acta->id;
		$personal->save();

		foreach($datos['nombramientos'] as $n){
			if(isset($n['id']))
				$nombramiento = PersonalNombramiento::find($n['id']);
			else
				$nombramiento = new PersonalNombramiento;
			$nombramiento->tipo = $n['tipo'];
			$nombramiento->total_proceso_promocion = $n['total_promocion'];
			$nombramiento->total_proceso_nombramiento = $n['total_nombramiento'];
			$nombramiento->acta_id = $acta->id;
			$nombramiento->save();
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
		return View::make('backend.actas.personal', array('acta_id' => $id));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$personal = Personal::where('acta_id', '=', $id)->get();
		$nombramientos = PersonalNombramiento::where('acta_id', '=', $id)->get();
		return Response::json(array(
					'personal'=>$personal,
					'nombramientos'=>$nombramientos
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

		$personal = Personal::find($datos['personal']['id']);
		$personal->enlace_dotacion_personal			= $datos['personal']['enlace_dotacion_personal'];
		$personal->estado 							= 'borrador';
		$personal->acta_id 							= $acta->id;
		$personal->save();
		$array_existentes = array();
		$array_no_modificados = array();
		$personal_nombramiento_existente = PersonalNombramiento::where('acta_id',$acta->id)->get();
		foreach ($personal_nombramiento_existente as $ps) {
			array_push($array_existentes, $ps->id);
		}

		foreach($datos['nombramientos'] as $n){
			if(isset($n['id'])){
				$nombramiento = PersonalNombramiento::find($n['id']);
				array_push($array_no_modificados,$n['id']);
			}else{
				$nombramiento = new PersonalNombramiento;
			}	
			$nombramiento->tipo = $n['tipo'];
			$nombramiento->total_proceso_promocion = $n['total_proceso_promocion'];
			$nombramiento->total_proceso_nombramiento = $n['total_proceso_nombramiento'];
			$nombramiento->acta_id = $acta->id;
			$nombramiento->save();
		}
		$resultado = array_diff($array_existentes, $array_no_modificados);
		PersonalNombramiento::whereIn('id',$resultado)->delete();
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
