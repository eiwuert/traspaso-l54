<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use View;
use App\Models\Gestion;
use App\Models\GestionProgramaProyecto;
use App\Models\GestionComiteInterministerial;
use App\Models\GestionPublicacion;
use App\Models\GestionCompromisoInternacional;
use App\Models\GestionLicitacion;

class ActaController extends BaseController{
	
	public function home(){
		return View::make('backend.home');
	}

	public function getListado(){
		$data['actas'] = Acta::all();
		return View::make('backend.actas.listado',$data);
	}

	public function getIniciar($id=null){
		//Obtener el avance de las secciones
		$data = array();
		if(!is_null($id)) $data['acta_id'] = $id;

		return View::make('backend.actas.iniciar', $data);
	}

	public function getPublica($id=null){
		//Obtener el avance de las secciones
		$data = array();
		if(!is_null($id)) $data['acta_id'] = $id;

		$data['gestion'] = Gestion::where('acta_id',$id)->first();
		$data['programas'] = GestionProgramaProyecto::where('acta_id',$id)->get();
		$data['comites'] = GestionComiteInterministerial::where('acta_id',$id)->get();
		$data['publicaciones'] = GestionPublicacion::where('acta_id',$id)->get();
		$data['compromisos'] = GestionCompromisoInternacional::where('acta_id',$id)->get();
		$data['licitaciones'] = GestionLicitacion::where('acta_id',$id)->get();
		return View::make('backend.actas.publica', $data);
	}


	public function getData(){

		$gestion = Gestion::all();
		$programas = GestionProgramaProyecto::all();
		$comites = GestionComiteInterministerial::all();
		$publicaciones = GestionPublicacion::all();
		$compromisos = GestionCompromisoInternacional::all();
		$licitaciones = GestionLicitacion::all();
		return Response::json(array(
					'gestion'=>$gestion,
					'programas'=>$programas,
					'comites'=>$comites,
					'publicaciones'=>$publicaciones,
					'compromisos'=>$compromisos,
					'licitaciones'=>$licitaciones
				));
	}


}