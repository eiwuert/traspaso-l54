<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;
use View;
use Illuminate\Http\Request;
use App\Models\Acta;
use Response;
use App\Models\Financiera;
use App\Models\FinancieraActivo;
use App\Models\FinancieraAnticipoFondo;
use App\Models\FinancieraConciliacionBancaria;
use App\Models\FinancieraCuentaCorriente;
use App\Models\FinancieraInternoRendir;

class FinancieraController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Nueva acta
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

		$acta = new Acta();
		$acta->institucion_id = \Auth::user()->institucion_id;
		$acta->save();
		$datos = $request->all();


		$financiera 								= new Financiera;
		$financiera->enlace_informe_contabilidad 	= $datos['financiera']['enlace_informe_contabilidad'];
		$financiera->estado 						= 'borrador';
		$financiera->acta_id 						= $acta->id;
		$financiera->save();

		foreach($datos['activos'] as $data_activo){
			if(isset($data_activo['id']))
				$activo = FinancieraActivo::find($data_activo['id']);
			else
				$activo = new FinancieraActivo;
			$activo->nombre 	= $data_activo['nombre'];
			$activo->detalle 	= $data_activo['detalle'];
			$activo->monto 		= $data_activo['monto'];
			$activo->plazo 		= $data_activo['plazo'];
			$activo->acta_id 	= $acta->id;
			$activo->save();
		}

		foreach($datos['anticipos'] as $data_anticipo){
			if(isset($data_anticipo['id']))
				$anticipo = FinancieraAnticipoFondo::find($data_anticipo['id']);
			else
				$anticipo = new FinancieraAnticipoFondo;
			$anticipo->anticipos_concedidos = $data_anticipo['anticipos_concedidos'];
			$anticipo->numero_beneficiarios = $data_anticipo['numero_beneficiarios'];
			$anticipo->monto 				= $data_anticipo['monto'];
			$anticipo->acta_id 				= $acta->id;
			$anticipo->save();
		}

		foreach($datos['conciliaciones'] as $data_conciliacion){
			if(isset($data_conciliacion['id']))
				$conciliacion = FinancieraConciliacionBancaria::find($data_conciliacion['id']);
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
		foreach($datos['cuentas'] as $data_cuenta){
			if(isset($data_cuenta['id']))
				$cuentas = FinancieraCuentaCorriente::find($data_cuenta['id']);
			else
				$cuentas = new FinancieraCuentaCorriente;
			$cuentas->numero_cuenta_corriente 	= $data_cuenta['numero_cuenta_corriente'];
			$cuentas->nombre_banco 				= $data_cuenta['nombre_banco'];
			$cuentas->numero_personas 			= $data_cuenta['numero_personas'];
			$cuentas->acta_id 					= $acta->id;
			$cuentas->save();
		}
		foreach($datos['internos'] as $data_interno){
			if(isset($data_interno['id']))
				$interno = FinancieraInternoRendir::find($data_interno['id']);
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

		return View::make('backend.actas.financiera', array('acta_id' => $id));
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
		$financiera 	= Financiera::where('acta_id', '=', $id)->get();
		$activos 		= FinancieraActivo::where('acta_id', '=', $id)->get();
		$anticipos 		= FinancieraAnticipoFondo::where('acta_id', '=', $id)->get();
		$conciliaciones = FinancieraConciliacionBancaria::where('acta_id', '=', $id)->get();
		$cuentas 		= FinancieraCuentaCorriente::where('acta_id', '=', $id)->get();
		$internos 		= FinancieraInternoRendir::where('acta_id', '=', $id)->get();

		return Response::json(array(
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
		$acta = Acta::find($id);
		$datos = $request->all();

		if(isset($datos['financiera'])){

			$financiera = Financiera::find($datos['financiera']['id']);

			if(is_null($financiera)){

				$financiera 								= new Financiera;
				$financiera->enlace_informe_contabilidad 	= $datos['financiera']['enlace_informe_contabilidad'];
				$financiera->estado 						= 'borrador';
				$financiera->acta_id 						= $acta->id;
				$financiera->save();

			}
			else{
				$financiera->enlace_informe_contabilidad 		= $datos['financiera']['enlace_informe_contabilidad'];
				$financiera->estado 							= 'borrador';
				$financiera->acta_id 							= $id;
				$financiera->save();
			}

		}
		else{
			$financiera 								= new Financiera;
			$financiera->enlace_informe_contabilidad 	= $datos['financiera']['enlace_informe_contabilidad'];
			$financiera->estado 						= 'borrador';
			$financiera->acta_id 						= $acta->id;
			$financiera->save();
		}


		$data_activo_existente 			= FinancieraActivo::where('acta_id',$acta->id)->get()->pluck('id')->all();
		$array_no_modificados_activo 	= array();

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


		$data_conciliacion_existente = FinancieraConciliacionBancaria::where('acta_id',$acta->id)->get()->pluck('id')->all();
		$array_no_modificados_conciliaciones = array();
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



		$data_cuenta_existente = FinancieraCuentaCorriente::where('acta_id',$acta->id)->get()->pluck('id')->all();
		$array_no_modificados_cuentas = array();
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


		$data_interno_existente = FinancieraInternoRendir::where('acta_id',$acta->id)->get()->pluck('id')->all();
		$array_no_modificados_internos = array();
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

		return Response::json(array(
			'acta_id'=>$acta->id
		));
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