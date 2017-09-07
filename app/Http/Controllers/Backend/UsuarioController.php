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

class UsuarioController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Identificar rol de usuario
		if(Auth::user()->perfil == 'root'){
			$usuarios = Usuario::with('institucion')->get();
		}
		elseif(Auth::user()->perfil == 'superadmin'){
			$usuarios = Usuario::where('institucion_id','=', Auth::user()->institucion_id)->with('institucion')->get();

		}
		else{
			//Return a vista sin permiso
		}
		
		return View::make('backend.mantenedores.usuarios.index')->with('usuarios', $usuarios);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
		return View::make('backend.mantenedores.usuarios.create')->with('instituciones', $instituciones)
																->with('roles', $roles);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array(
			'nombres'       => 'required',
			'apellidos'     => 'required',
			'correo'      => 'required|email',
			'rut'      => 'required',
			'institucion_id' => 'required|numeric',
			'perfil'       => 'required'
		);
		
		$validator = Validator::make(Input::except('_token'), $rules);

		if ($validator->fails()) {
			return Redirect::to('backend/gestion/usuarios/create')
				->withErrors($validator->errors())
				->withInput(Input::except('password'));
		} else {
			//validar rut
			$data = Input::except('_token');
			$data['rut'] = preg_replace('/[^k0-9]/i', '', $data['rut']);

			$rut_valido = Helpers::validateRun($data['rut']);

			if($rut_valido ){
				//Validar que el usuario no esté creado
				$usuario_rut = Usuario::where('rut', $data['rut'])->first();
				$usuario_email = Usuario::Where('correo', $data['correo'])->first();
				if(!is_null($usuario_rut)){
					Session::flash('error', 'No fue posible crear el usuario. El rut ingresado pertenece a un usuario ya registrado en la plataforma.');
					return Redirect::to('backend/gestion/usuarios/create');
				}
				if(!is_null($usuario_email)){
					Session::flash('error', 'No fue posible crear el usuario. El e-mail ingresado pertenece a un usuario ya registrado en la plataforma.');
					return Redirect::to('backend/gestion/usuarios/create');
				}
				$usuario = Usuario::create($data);
				$usuario->save();

				Session::flash('message', 'Usuario creado exitosamente');
				return Redirect::to('backend/gestion/usuarios');

			}
			else{
				Session::flash('error', 'El rut ingresado no es válido');
				return Redirect::to('backend/gestion/usuarios/create');
			}

			
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usuario = Usuario::find($id);

		return View::make('backend.mantenedores.usuarios.show')->with('usuario', $usuario);
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

		return View::make('backend.mantenedores.usuarios.edit')->with('usuario', $usuario)
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
			return Redirect::to('backend/gestion/usuarios/' . $id . '/edit')
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
			Session::flash('message', 'Usuario actualizado exitosamente');
			return Redirect::to('backend/gestion/usuarios/');
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

		$usuario = Usuario::find($id);
		$usuario->delete();

		Session::flash('message', 'El usuario fue borrado exitosamente');
		return Redirect::to('backend/gestion/usuarios');
	}


}
