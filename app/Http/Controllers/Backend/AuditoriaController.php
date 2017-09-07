<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use View;
use App\Models\Acta;
use Response;
use App\Models\Auditoria;

class AuditoriaController extends BaseController {

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Nueva acta
		return View::make('backend.actas.auditoria');
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


		$auditoria 						= new Auditoria;
		//Almacenar ruta del archivo
		$auditoria->archivo_resolucion 	= $datos['auditoria']['documento'];
		$financiera->estado 			= 'borrador';
		$financiera->acta_id 			= $acta->id;
		$financiera->save();


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

		return View::make('backend.actas.auditoria', array('acta_id' => $id));
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
		$auditoria 	= Auditoria::where('acta_id', '=', $id)->get();


		return Response::json(array(
					'auditoria'=>$auditoria,
				));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		dd($request->all());


		$acta = Acta::find($id);
		$datos = $request->all();

		$financiera = Financiera::find($datos['auditoria']['id']);

		$financiera->archivo_resolucion = $datos['auditoria']['documento'];
		$financiera->estado 			= 'borrador';
		$financiera->acta_id 			= $id;
		$financiera->save();

		$data_activo_existente 			= FinancieraActivo::where('acta_id',$acta->id)->get()->lists('id');
		$array_no_modificados_activo 	= array();

		
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