<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Storage;
use View;
use Input;
use App\Models\Acta;
use App\Models\OtroAntecedente;
use App\Models\OtroAntecedenteArchivo;
use Response;

class OtroAntecedenteController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('backend.actas.otro');
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
		/*
		$acta = new Acta();
		$acta->institucion_id = \Auth::user()->institucion_id;
		$acta->save();
		*/

		$input = $request->all();


		
		$otro 									= new OtroAntecedente;
		if($request->has('name'))
			$otro->direccion 					= $request->input('direccion');
		
		$otro->estado 							= 'borrador';
		$otro->acta_id 							= 1;
		$otro->save();

		if($request->hasFile('archivo')){
			$archivo = $request->file('archivo');
			$archivoFileName = time().'.'.$archivo->getClientOriginalExtension();
			$s3 = Storage::disk('s3');
			$filePath = '/pruebas/' . $archivoFileName;
			$s3->put($filePath, file_get_contents($archivo), 'public');
			
			$otro_archivo 			= new OtroAntecedenteArchivo;
			$otro_archivo->nombre 	= $archivoFileName;
			$otro_archivo->acta_id 	= 1;
			$otro_archivo->save();
		}

		

		return View::make('backend.actas.otro', array());
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		/*
		$otro = OtroAntecedente::where('acta_id', '=', $id)->first();
		$archivo = Storage::disk('s3')->get('pruebas/'.$otro->archivo);
		header("Content-type: application/pdf");
		header("Content-Disposition: attachment; filename=$otro->archivo");
		echo $archivo;
		*/
		return View::make('backend.actas.otro');
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$otro = OtroAntecedente::where('acta_id', '=', $id)->get();
		$archivos = OtroAntecedenteArchivo::where('acta_id', '=', $id)->get();
		return Response::json(array(
					'otro'=>$otro,
					'archivos'=>$archivos
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

		if(isset($datos['personal']['id']))
			$personal = Personal::find($datos['personal']['id']);
		else
			$personal = new Personal;
		$personal->enlace_dotacion_personal			= $datos['personal']['enlace_dotacion_personal'];
		$personal->estado 							= 'borrador';
		$personal->acta_id 							= $acta->id;
		$personal->save();

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
