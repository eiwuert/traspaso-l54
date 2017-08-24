<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseControllerFrontEnd as BaseController;
use App\Models\Institucion;

class InstitucionesController extends BaseController{

	public function index(){

	   $servicios = Institucion::all();

	   return \View::make('frontend.instituciones.index', array('entidades' => $servicios) );
	}


	

}
