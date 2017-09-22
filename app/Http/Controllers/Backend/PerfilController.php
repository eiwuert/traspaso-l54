<?php

namespace App\Http\Controllers\Backend;
//use App\Http\Controllers\Backend\BaseController as BaseController;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input as Input;
use App\Models\Usuario as Usuario;
use App\Models\Institucion;
use View;
use Validator;
use Session;
use Redirect;
use Auth;
use App\Helpers as Helpers;

class PerfilController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$usuario = Auth::user();

		return Redirect::to('backend/perfil/' . $usuario->id . '/edit');

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
	public function store()
	{

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		return Redirect::to('backend/perfil/' . $id . '/edit');
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
		$usuario = Usuario::find($id);

		if(Auth::user()->perfil == 'root'){
			$instituciones = Institucion::all()->pluck('nombre', 'id')->all();
			$roles = array('-1' => 'Seleccione un rol de usuario', 'root' => 'Root', 'superadmin' => 'Super admin', 'admin' => 'admin', 'auditor' => 'Auditor');
		}
		elseif(Auth::user()->perfil == 'superadmin'){
			$instituciones = Institucion::where('id', '=', Auth::user()->institucion_id)->pluck('nombre', 'id')->all();
			$roles = array('-1' => 'Seleccione un rol de usuario', 'admin' => 'admin', 'auditor' => 'Auditor');

		}
		else{
			//Return a vista sin permiso
		}

		return View::make('backend.perfil.edit')->with('usuario', $usuario)
												->with('instituciones', $instituciones)
												->with('roles', $roles);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'nombres'       => 'required',
			'apellidos'     => 'required',
			'correo'      => 'required|email',
			'institucion_id' => 'required|numeric',
			'perfil'       => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		// process the login
		if ($validator->fails()) {
			return Redirect::to('backend/perfil/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			// store
			$usuario 					= Usuario::find($id);
			$usuario->nombres 			= Input::get('nombres');
			$usuario->apellidos 		= Input::get('apellidos');
			$usuario->rut 				= Input::get('rut');
			$usuario->correo 			= Input::get('correo');
			$usuario->perfil 			= Input::get('perfil');
			$usuario->institucion_id 	= Input::get('institucion_id');
			$usuario->save();
			// redirect
			Session::flash('message', 'Su perfil fue actualizado exitosamente');
			return Redirect::to('backend/perfil/' . $id . '/edit');
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

	}


}
