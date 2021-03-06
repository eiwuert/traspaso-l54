<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Storage;
use View;
use App\Models\Acta;
use App\Models\Auditoria;
use Response;
use App\Models\Institucion;
use Validator;
use Session;
use Auth;

class AuditoriaController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
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

		$input = $request->all();

		if(isset($input['acta'])) $dataacta = json_decode($input['acta'],true);
		if(isset($input['auditoria'])) $dataauditoria = json_decode($input['auditoria'],true);

		if(isset($dataacta['id']))
			$acta = Acta::find($dataacta['id']);
		else
			$acta = new Acta();
		$acta->institucion_id = \Auth::user()->institucion_id;
		$acta->save();

		if(isset($dataauditoria['id']))
			$auditoria 	= Auditoria::find($dataauditoria['id']);
		else
			$auditoria 	= new Auditoria;

		$institucion = Institucion::find(\Auth::user()->institucion_id);

		$rules = array(
			'archivo'       => 'required|max:10000|mimes:jpg,jpeg,bmp,png,pdf,xls,xlsx,txt,csv,dox,docx'
		);
		
		//$validator = Validator::make(Input::except('_token'), $rules);
		/*if ($validator->fails()) {
			return false;
			/*return Redirect::to('backend/gestion/usuarios/create')
				->withErrors($validator->errors())
				->withInput(Input::except('password'));*/
		/*} else {*/



		if($request->hasFile('archivo')){
			$archivo = $request->file('archivo');
			$archivoFileName = $archivo->getClientOriginalName();

			$auditoria->archivo_nombre 	= $archivoFileName;
			$auditoria->estado 			= 'borrador';
			$auditoria->acta_id 		= $acta->id;
			$auditoria->save();
			
			$s3 = Storage::disk('s3');
			$filePath =  $institucion->codigo.'/'.$acta->id.'/Auditoria/'. $archivoFileName;
			$s3->put($filePath, file_get_contents($archivo), 'public');
			
		}
		Session::flash('message', 'información actualizada exitosamente');
		return Response::json(array(
				'acta_id'=>$acta->id
			));

		//}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data 				= array();
		$data['acta_id'] 	= $id;
		$institucion 		= Institucion::find(Auth::user()->institucion_id);
		$auditoria 			= Auditoria::where('acta_id', '=', $id)->first();

		if(!is_null($auditoria)){
			$auditoria['archivo_enlace'] 	= Storage::disk('s3')->get($institucion->codigo.'/'.$id.'/Auditoria/'.$auditoria->archivo_nombre);
			$data['auditoria'] 				= $auditoria;
		}

		return View::make('backend.actas.auditoria', $data);
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$acta 				= Acta::find($id);
		$institucion 		= Institucion::find(Auth::user()->institucion_id);
		$auditoria 			= Auditoria::where('acta_id', '=', $id)->first();

		return Response::json(array(
					'acta' => $acta,
					'auditoria' => $auditoria
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
		
		/*$acta = Acta::find($id);
		$datos = $request->all();

		if(isset($datos['auditoria']['id']))
			$auditoria = Auditoria::find($datos['auditoria']['id']);
		else
			$auditoria = new Auditoria;
		
		$auditoria->archivo_nombre 	= $request->input('archivo');
		$auditoria->estado 			= 'borrador';
		$auditoria->acta_id 		= $acta->id;
		$auditoria->save();

		//borrar archivo si es que existe uno previo
		if($request->hasFile('archivo')){
			$archivo = $request->file('archivo');
			$archivoFileName = time().'.'.$archivo->getClientOriginalExtension();
			$s3 = Storage::disk('s3');
			$filePath = \Auth::user()->institucion->codigo.'/'.$acta->id.'/Auditoria/'. $archivoFileName;
			$s3->put($filePath, file_get_contents($archivo), 'public');
			
		}*/

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	

		$acta = Acta::find($id);
		$auditoria = Auditoria::where('acta_id','=',$id)->first();
		
		$path = \Auth::user()->institucion->codigo.'/'.$acta->id.'/Auditoria/'.$auditoria->archivo_nombre;
		Storage::disk('s3')->delete($path);

		$auditoria->delete();

		Session::flash('message', 'información actualizada exitosamente');
		return View::make('backend.actas.iniciar', array('acta_id' => $auditoria->acta_id ));


		
	}

	public function downloadFile($id){


		$institucion 					= Institucion::find(Auth::user()->institucion_id);
		$auditoria 						= Auditoria::where('acta_id', '=', $id)->first();

		$archivo = Storage::disk('s3')->get($institucion->codigo.'/'.$id.'/Auditoria/'.$auditoria->archivo_nombre);
		$headers = [
		    'Content-Type' => 'text/csv', 
		    'Content-Description' => 'File Transfer',
		    'Content-Disposition' => "attachment; filename={$auditoria->archivo_nombre}",
		    'filename'=> $auditoria->archivo_nombre
		];

		return response($archivo, 200, $headers);
		return View::make('backend.actas.iniciar', array('acta_id' => $auditoria->acta_id ));

	}


}
