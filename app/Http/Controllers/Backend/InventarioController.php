<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use View;
use Input;
use App\Models\Acta;
use App\Models\Inventario;
use App\Models\InventarioContrato;
use App\Models\InventarioEscritorio;
use App\Models\InventarioMuebleInmueble;
use App\Models\InventarioProductoEmergencia;
use App\Models\InventarioVehiculo;
use Response;

class InventarioController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('backend.actas.inventario');
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


		$inventario 									= new Inventario;
		$inventario->estado 							= 'borrador';
		$inventario->acta_id 							= $acta->id;
		$inventario->save();

		foreach($datos['muebles'] as $n){
			if(isset($n['id']))
				$mueble = InventarioMuebleInmueble::find($n['id']);
			else
				$mueble = new InventarioMuebleInmueble;
			$mueble->tipo_activo = $n['tipo_activo'];
			$mueble->unidades = $n['unidades'];
			$mueble->acta_id = $acta->id;
			$mueble->save();
		}

		//Vehículos
		foreach($datos['vehiculos'] as $n){
			if(isset($n['id'])){
				$vehiculo = InventarioVehiculo::find($n['id']);
			}else{
				$vehiculo = new InventarioVehiculo;
			}	
			$vehiculo->identificacion_especie = $n['identificacion_especie'];
			$vehiculo->patente = $n['patente'];
			$vehiculo->condicion_juridica = $n['condicion_juridica'];
			$vehiculo->condicion_fisica = $n['condicion_fisica'];
			$vehiculo->destinacion = $n['destinacion'];
			$vehiculo->acta_id = $acta->id;
			$vehiculo->save();
		}

		//Escritorios
		foreach($datos['escritorios'] as $n){
			if(isset($n['id'])){
				$escritorio = InventarioEscritorio::find($n['id']);
			}else{
				$escritorio = new InventarioEscritorio;
			}	
			$escritorio->identificacion_especie = $n['identificacion_especie'];
			$escritorio->unidades = $n['unidades'];
			$escritorio->monto = $n['monto'];
			$escritorio->acta_id = $acta->id;
			$escritorio->save();
		}

		//Productos emergencias
		foreach($datos['productos'] as $n){
			if(isset($n['id'])){
				$producto = InventarioProductoEmergencia::find($n['id']);
			}else{
				$producto = new InventarioProductoEmergencia;
			}	
			$producto->identificacion_especie = $n['identificacion_especie'];
			$producto->unidades = $n['unidades'];
			$producto->acta_id = $acta->id;
			$producto->save();
		}

		//Contratos
		foreach($datos['contratos'] as $n){
			if(isset($n['id'])){
				$contrato = InventarioContrato::find($n['id']);
			}else{
				$contrato = new InventarioContrato;
			}	
			$contrato->clasificacion_contratos = $n['clasificacion_contratos'];
			$contrato->numero_contratos = $n['numero_contratos'];
			$contrato->monto_mensual = $n['monto_mensual'];
			$contrato->acta_id = $acta->id;
			$contrato->save();
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
		return View::make('backend.actas.inventario', array('acta_id' => $id));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$inventario = Inventario::where('acta_id', '=', $id)->get();
		$contratos = InventarioContrato::where('acta_id', '=', $id)->get();
		$escritorios = InventarioEscritorio::where('acta_id', '=', $id)->get();
		$mueblesinmuebles = InventarioMuebleInmueble::where('acta_id', '=', $id)->get();
		$productos = InventarioProductoEmergencia::where('acta_id', '=', $id)->get();
		$vehiculos = InventarioVehiculo::where('acta_id', '=', $id)->get();
		return Response::json(array(
					'inventario'=>$inventario,
					'contratos'=>$contratos,
					'escritorios'=>$escritorios,
					'mueblesinmuebles'=>$mueblesinmuebles,
					'productos'=>$productos,
					'vehiculos'=>$vehiculos
				));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		
		$acta = Acta::find($id);
		$datos = $request->all();

		if(isset($datos['inventario']['id']))
			$inventario = Inventario::find($datos['inventario']['id']);
		else
			$inventario = new Inventario;
		$inventario->estado 							= 'borrador';
		$inventario->acta_id 							= $acta->id;
		$inventario->save();

		//Muebles inmuebles		
		$array_mueble_inmueble = InventarioMuebleInmueble::where('acta_id',$acta->id)->pluck('id')->toArray();
		$array_no_muebles_inmuebles = array();
		foreach($datos['muebles'] as $n){
			if(isset($n['id'])){
				$mueblleinmueble = InventarioMuebleInmueble::find($n['id']);
				array_push($array_no_muebles_inmuebles,$n['id']);
			}else{
				$mueblleinmueble = new InventarioMuebleInmueble;
			}	
			$mueblleinmueble->tipo_activo = $n['tipo_activo'];
			$mueblleinmueble->unidades = $n['unidades'];
			$mueblleinmueble->acta_id = $acta->id;
			$mueblleinmueble->save();
		}
		$resultado = array_diff($array_mueble_inmueble, $array_no_muebles_inmuebles);
		InventarioMuebleInmueble::whereIn('id',$resultado)->delete();

		//Vehículos
		$array_vehiculos = InventarioVehiculo::where('acta_id',$acta->id)->pluck('id')->toArray();
		$array_no_vehiculos = array();
		foreach($datos['vehiculos'] as $n){
			if(isset($n['id'])){
				$vehiculo = InventarioVehiculo::find($n['id']);
				array_push($array_no_vehiculos,$n['id']);
			}else{
				$vehiculo = new InventarioVehiculo;
			}	
			$vehiculo->identificacion_especie = $n['identificacion_especie'];
			$vehiculo->patente = $n['patente'];
			$vehiculo->condicion_juridica = $n['condicion_juridica'];
			$vehiculo->condicion_fisica = $n['condicion_fisica'];
			$vehiculo->destinacion = $n['destinacion'];
			$vehiculo->acta_id = $acta->id;
			$vehiculo->save();
		}
		$resultado = array_diff($array_vehiculos, $array_no_vehiculos);
		InventarioVehiculo::whereIn('id',$resultado)->delete();

		//Escritorios
		$array_escritorios = InventarioEscritorio::where('acta_id',$acta->id)->pluck('id')->toArray();
		$array_no_escritorios = array();
		foreach($datos['escritorios'] as $n){
			if(isset($n['id'])){
				$escritorio = InventarioEscritorio::find($n['id']);
				array_push($array_no_escritorios,$n['id']);
			}else{
				$escritorio = new InventarioEscritorio;
			}	
			$escritorio->identificacion_especie = $n['identificacion_especie'];
			$escritorio->unidades = $n['unidades'];
			$escritorio->monto = $n['monto'];
			$escritorio->acta_id = $acta->id;
			$escritorio->save();
		}
		$resultado = array_diff($array_escritorios, $array_no_escritorios);
		InventarioEscritorio::whereIn('id',$resultado)->delete();

		//Productos emergencias
		$array_productos = InventarioProductoEmergencia::where('acta_id',$acta->id)->pluck('id')->toArray();
		$array_no_productos = array();
		foreach($datos['productos'] as $n){
			if(isset($n['id'])){
				$producto = InventarioProductoEmergencia::find($n['id']);
				array_push($array_no_productos,$n['id']);
			}else{
				$producto = new InventarioProductoEmergencia;
			}	
			$producto->identificacion_especie = $n['identificacion_especie'];
			$producto->unidades = $n['unidades'];
			$producto->acta_id = $acta->id;
			$producto->save();
		}
		$resultado = array_diff($array_productos, $array_no_productos);
		InventarioProductoEmergencia::whereIn('id',$resultado)->delete();

		//Contratos
		$array_contratos = InventarioContrato::where('acta_id',$acta->id)->get()->pluck('id')->toArray();
		$array_no_contratos = array();
		foreach($datos['contratos'] as $n){
			if(isset($n['id'])){
				$contrato = InventarioContrato::find($n['id']);
				array_push($array_no_contratos,$n['id']);
			}else{
				$contrato = new InventarioContrato;
			}	
			$contrato->clasificacion_contratos = $n['clasificacion_contratos'];
			$contrato->numero_contratos = $n['numero_contratos'];
			$contrato->monto_mensual = $n['monto_mensual'];
			$contrato->acta_id = $acta->id;
			$contrato->save();
		}
		$resultado = array_diff($array_contratos, $array_no_contratos);
		InventarioContrato::whereIn('id',$resultado)->delete();
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
