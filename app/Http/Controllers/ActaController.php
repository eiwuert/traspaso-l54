<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use View;
use App\Models\Acta;
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

	public function getIniciar($id = null){

		//Obtener el avance de las secciones
		$data = array();

		if(!is_null($id)){

			$data['acta_id'] = $id;
			$acta = Acta::find($id);

			($acta->gestion->count() > 0 || $acta->gestionComiteInterministerial->count() > 0 || $acta->gestionLicitacion->count() > 0 || $acta->gestionProgramaProyecto->count() > 0 || $acta->gestionPublicaciones->count() >0 )? $data['gestion'] = true : $data['gestion'] = false;
	        ($acta->personal->count() > 0 || $acta->personalNombramientos->count() > 0)? $data['personal'] = true : $data['personal'] = false;
	        ($acta->financiera->count() > 0 || $acta->financieraCuentaCorriente->count() > 0 || $acta->financieraInternoRendir->count() > 0 || $acta->FinancieraConciliacionesBancarias->count() > 0 || $acta->FinancieraActivos->count() > 0 || $acta->FinancieraAnticiposFondos->count() > 0 )? $data['financiera'] = true : $data['financiera'] = false;
	        ($acta->inventario->count() > 0 || $acta->inventarioVehiculos->count() > 0 )? $data['inventario'] = true : $data['inventario'] = false;
	        ($acta->legal->count() > 0 || $acta->legalJuicioPendiente->count() > 0 || $acta->legalSumarioInvestigacion->count() > 0|| $acta->legalRequerimientoRespuesta->count() > 0|| $acta->legalDocumentosTomaRazon->count() > 0 || $acta->legalProyectosLeyTramitacion->count() > 0 )? $data['legal'] = true : $data['legal'] = false;
	        
	        ($acta->administrativa->count() > 0 || $acta->administrativaDocumento->count() > 0 )? $data['administrativa'] = true : $data['administrativa'] = false;
	        ($acta->auditoria->count() > 0  )? $data['auditoria'] = true : $data['auditoria'] = false;
	        ($acta->participacionCiudadana->count() > 0 )? $data['participacion'] = true : $data['participacion'] = false;
	        //(!is_null($acta->biblioteca) || !is_null($acta->inventarioVehiculos) )? $data['biblioteca'] = true : $data['biblioteca'] = false;
	        ($acta->otroAntecedente->count() > 0 )? $data['otros'] = true : $data['otros'] = false;
		} 

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