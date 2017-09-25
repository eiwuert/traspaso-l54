<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;
use View;
use Illuminate\Http\Request;
use App\Models\Acta;
use App\Models\Institucion;
use Response;
use App\Models\Financiera;
use App\Models\FinancieraActivo;
use App\Models\FinancieraAnticipoFondo;
use App\Models\FinancieraConciliacionBancaria;
use App\Models\FinancieraCuentaCorriente;
use App\Models\FinancieraInternoRendir;
use Session;
use Storage;
use Auth;

class FinancieraController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('backend.actas.financiera');
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

		


		$datos 			= $request->all();
		$institucion 	= Institucion::find(\Auth::user()->institucion_id);

		$datos['financiera'] = json_decode($datos['financiera'],true);

		if(isset($datos['financiera']['id'])){
			$acta 		= Acta::find($datos['financiera']['acta_id']);
			$financiera = Financiera::where('acta_id', $acta->id)->first();
		}
		else{
			$acta 		= new Acta();
			$financiera = new Financiera;
		}
		
		$acta->institucion_id = \Auth::user()->institucion_id;
		$acta->save();


		if($request->hasFile('archivo')){

			$archivo = $request->file('archivo');
			$archivoFileName = $archivo->getClientOriginalName();
			$financiera->enlace_informe_contabilidad 	= $archivoFileName;
			$s3 = Storage::disk('s3');
			$filePath =  $institucion->codigo.'/'.$acta->id.'/Financiera/'. $archivoFileName;
			$s3->put($filePath, file_get_contents($archivo), 'public');
			
		}

		$financiera->estado 	= 'borrador';
		$financiera->acta_id 	= $acta->id;
		$financiera->save();

		$datos['activos'] 				= json_decode($datos['activos'],true);
		$data_activo_existente 			= FinancieraActivo::where('acta_id',$acta->id)->get()->pluck('id')->all();
		$array_no_modificados_activo 	= array();

		$rules_activos = array(
			'nombre'       => 'required',
			'detalle'     => 'required',
			'monto'      => 'required',
			'plazo'      => 'required',
		);
		
		$validator = Validator::make(Input::except('_token'), $rules_activos);

		if ($validator->fails()) {
			return Redirect::to('backend/actas/financiera/'.$acta_id)
				->withErrors($validator->errors());
		}

		foreach($datos['activos'] as $data_activo){
			if(isset($data_activo['id'])){
				$activo = FinancieraActivo::find($data_activo['id']);
				array_push($array_no_modificados_activo,$data_activo['id']);
			}
			else
				$activo = new FinancieraActivo;
			$activo->nombre 	= $data_activo['nombre'];
			$activo->detalle 	= $data_activo['detalle'];
			$activo->monto 		= $data_activo['monto'];
			$activo->plazo 		= $data_activo['plazo'];
			$activo->acta_id 	= $acta->id;
			$activo->save();
		}
		$resultado = array_diff($data_activo_existente, $array_no_modificados_activo);
		FinancieraActivo::whereIn('id',$resultado)->delete();

		$datos['anticipos'] 			= json_decode($datos['anticipos'],true);
		$data_anticipo_existente 		= FinancieraAnticipoFondo::where('acta_id',$acta->id)->get()->pluck('id')->all();
		$array_no_modificados_anticipos = array();
		foreach($datos['anticipos'] as $data_anticipo){
			if(isset($data_anticipo['id'])){
				$anticipo = FinancieraAnticipoFondo::find($data_anticipo['id']);
				array_push($array_no_modificados_anticipos,$data_anticipo['id']);
			}
			else
				$anticipo = new FinancieraAnticipoFondo;
			$anticipo->anticipos_concedidos = $data_anticipo['anticipos_concedidos'];
			$anticipo->numero_beneficiarios = $data_anticipo['numero_beneficiarios'];
			$anticipo->monto 				= $data_anticipo['monto'];
			$anticipo->acta_id 				= $acta->id;
			$anticipo->save();
		}
		$resultado = array_diff($data_anticipo_existente, $array_no_modificados_anticipos);
		FinancieraAnticipoFondo::whereIn('id',$resultado)->delete();

		$datos['conciliaciones'] 				= json_decode($datos['conciliaciones'],true);
		$data_conciliacion_existente 			= FinancieraConciliacionBancaria::where('acta_id',$acta->id)->get()->pluck('id')->all();
		$array_no_modificados_conciliaciones 	= array();
		foreach($datos['conciliaciones'] as $data_conciliacion){
			if(isset($data_conciliacion['id'])){
				$conciliacion = FinancieraConciliacionBancaria::find($data_conciliacion['id']);
				array_push($array_no_modificados_anticipos,$data_conciliacion['id']);
			}
			else
				$conciliacion = new FinancieraConciliacionBancaria;
			
			$conciliacion->numero_cuenta_corriente 	= $data_conciliacion['numero_cuenta_corriente'];
			$conciliacion->saldo_contable 			= $data_conciliacion['saldo_contable'];
			$conciliacion->saldo_banco_cartola 		= $data_conciliacion['saldo_banco_cartola'];
			$conciliacion->depositos_no_registrados = $data_conciliacion['depositos_no_registrados'];
			$conciliacion->giros_no_registrados 	= $data_conciliacion['giros_no_registrados'];
			$conciliacion->saldo_banco_contable 	= $data_conciliacion['saldo_banco_contable'];
			$conciliacion->acta_id 					= $acta->id;
			$conciliacion->save();
		}
		$resultado = array_diff($data_conciliacion_existente, $array_no_modificados_conciliaciones);
		FinancieraConciliacionBancaria::whereIn('id',$resultado)->delete();


		$datos['cuentas'] 				= json_decode($datos['cuentas'],true);
		$data_cuenta_existente 			= FinancieraCuentaCorriente::where('acta_id',$acta->id)->get()->pluck('id')->all();
		$array_no_modificados_cuentas 	= array();
		foreach($datos['cuentas'] as $data_cuenta){
			if(isset($data_cuenta['id'])){
				$cuentas = FinancieraCuentaCorriente::find($data_cuenta['id']);
				array_push($array_no_modificados_cuentas,$data_cuenta['id']);
			}
			else
				$cuentas = new FinancieraCuentaCorriente;
			$cuentas->numero_cuenta_corriente 	= $data_cuenta['numero_cuenta_corriente'];
			$cuentas->nombre_banco 				= $data_cuenta['nombre_banco'];
			$cuentas->numero_personas 			= $data_cuenta['numero_personas'];
			$cuentas->acta_id 					= $acta->id;
			$cuentas->save();
		}
		$resultado = array_diff($data_cuenta_existente, $array_no_modificados_cuentas);
		FinancieraCuentaCorriente::whereIn('id',$resultado)->delete();

		$datos['internos'] 				= json_decode($datos['internos'],true);
		$data_interno_existente 		= FinancieraInternoRendir::where('acta_id',$acta->id)->get()->pluck('id')->all();
		$array_no_modificados_internos 	= array();
		foreach($datos['internos'] as $data_interno){
			if(isset($data_interno['id'])){
				$interno = FinancieraInternoRendir::find($data_interno['id']);
				array_push($array_no_modificados_internos,$data_interno['id']);
			}
			else
				$interno = new FinancieraInternoRendir;
			$interno->fondo_interno 	= $data_interno['fondo_interno'];
			$interno->monto_autorizado 	= $data_interno['monto_autorizado'];
			$interno->monto_gastado 	= $data_interno['monto_gastado'];
			$interno->detalle_gastado 	= $data_interno['detalle_gastado'];
			$interno->observaciones 	= $data_interno['observaciones'];
			$interno->acta_id 			= $acta->id;
			$interno->save();
		}
		$resultado = array_diff($data_interno_existente, $array_no_modificados_internos);
		FinancieraInternoRendir::whereIn('id',$resultado)->delete();

		
		Session::flash('message', 'información actualizada exitosamente');

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

		$data 				= array();
		$data['acta_id'] 	= $id;
		$institucion 		= Institucion::find(Auth::user()->institucion_id);
		$financiera 		= Financiera::where('acta_id', '=', $id)->first();

		if(!is_null($financiera->enlace_informe_contabilidad)){
			$financiera['archivo_enlace'] 	= Storage::disk('s3')->get($institucion->codigo.'/'.$id.'/Financiera/'.$financiera->enlace_informe_contabilidad);
			$data['financiera'] 			= $financiera;
		}

		return View::make('backend.actas.financiera', $data);
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
		$acta 			= Acta::find($id);
		$financiera 	= Financiera::where('acta_id', '=', $id)->get();
		$activos 		= FinancieraActivo::where('acta_id', '=', $id)->get();
		$anticipos 		= FinancieraAnticipoFondo::where('acta_id', '=', $id)->get();
		$conciliaciones = FinancieraConciliacionBancaria::where('acta_id', '=', $id)->get();
		$cuentas 		= FinancieraCuentaCorriente::where('acta_id', '=', $id)->get();
		$internos 		= FinancieraInternoRendir::where('acta_id', '=', $id)->get();

		return Response::json(array(
					'acta' => $acta,
					'financiera'=>$financiera,
					'activos'=>$activos,
					'anticipos'=>$anticipos,
					'conciliaciones'=>$conciliaciones,
					'cuentas'=>$cuentas,
					'internos'=>$internos
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
		//Solo usamos post
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		//Borrar archivo
		$acta 		= Acta::find($id);
		$financiera = financiera::where('acta_id','=',$id)->first();
		
		$path = \Auth::user()->institucion->codigo.'/'.$acta->id.'/Financiera/'.$financiera->enlace_informe_contabilidad;
		Storage::disk('s3')->delete($path);

		$financiera->enlace_informe_contabilidad = null;
		$financiera->save();

		Session::flash('message', 'información actualizada exitosamente');
		return redirect('backend/actas/iniciar/'.$financiera->acta_id);
		//return View::make('backend.actas.iniciar', array('acta_id' => $financiera->acta_id ));
	}

	public function downloadFile($id){


		$institucion 	= Institucion::find(Auth::user()->institucion_id);
		$financiera 	= Financiera::where('acta_id', '=', $id)->first();

		$archivo = Storage::disk('s3')->get($institucion->codigo.'/'.$id.'/Financiera/'.$financiera->enlace_informe_contabilidad);
		$headers = [
		    'Content-Type' => 'text/csv', 
		    'Content-Description' => 'File Transfer',
		    'Content-Disposition' => "attachment; filename={$financiera->enlace_informe_contabilidad}",
		    'filename'=> $financiera->enlace_informe_contabilidad
		];

		return response($archivo, 200, $headers);
		return View::make('backend.actas.iniciar', array('acta_id' => $financiera->acta_id ));

	}


}