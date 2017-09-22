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
		
		$input = $request->all();
		$dataotro = json_decode($input['otro'],true);

		if(isset($dataotro['id']))
			$acta = Acta::find($dataotro['acta_id']);
		else
			$acta = new Acta();
		$acta->institucion_id = \Auth::user()->institucion_id;
		$acta->save();

		if(isset($dataotro['id']))
			$otro 								= OtroAntecedente::find($dataotro['id']);
		else
			$otro 								= new OtroAntecedente;
		
		if(isset($dataotro['direccion']))
			$otro->direccion 					= $dataotro['direccion'];
		
		$otro->estado 							= 'borrador';
		$otro->acta_id 							= $acta->id;
		$otro->save();

		if($request->hasFile('archivos')){
			//$archivo = $request->file('file');
			foreach($request->file('archivos') as $archivo){
				$s3 = Storage::disk('s3');
				$filePath = \Auth::user()->institucion->codigo.'/'.$acta->id.'/'.$archivo->getClientOriginalName();
				$s3->put($filePath, file_get_contents($archivo), 'public');
				$otro_archivo 			= new OtroAntecedenteArchivo;
				$otro_archivo->nombre 	= $archivo->getClientOriginalName();
				$otro_archivo->acta_id 	= $acta->id;
				$otro_archivo->save();
			}
		}
		
		/*
		$dataarchivos = json_decode($input['files'],true);
		if(isset($dataarchivos)){
			$array_archivos = OtroAntecedenteArchivo::select('id')->where('acta_id',$acta->id)->pluck('id')->toArray();
			$array_no_archivos = array();
			foreach($dataarchivos as $n){
				if(isset($n['id'])){
					$otro_archivo = OtroAntecedenteArchivo::find($n['id']);
					array_push($array_no_archivos,$n['id']);
				}
			}
			$resultado = array_diff($array_archivos, $array_no_archivos);
			$archivos = OtroAntecedenteArchivo::whereIn('id',$resultado)->get();
			foreach($archivos as $archivo){
				$path = \Auth::user()->institucion->codigo.'/'.$acta->id.'/'.$archivo->nombre;
				Storage::disk('s3')->delete($path);
			}
			OtroAntecedenteArchivo::whereIn('id',$resultado)->delete();
		}
		*/

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
		$datos = $request->all();
		$archivo = OtroAntecedenteArchivo::find($datos['archivo']['id']);
		if($archivo){
			$path = \Auth::user()->institucion->codigo.'/'.$archivo->acta_id.'/'.$archivo->nombre;
			Storage::disk('s3')->delete($path);
			$archivo->delete();
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

	public function download($archivo_id)
	{
		$otro_archivo = OtroAntecedenteArchivo::find($archivo_id);
		$archivo = Storage::disk('s3')->get(\Auth::user()->institucion->codigo.'/'.$otro_archivo->acta_id.'/'.$otro_archivo->nombre);
		header("Content-Disposition: attachment; filename=$otro_archivo->nombre");
		echo $archivo;
	}

}
