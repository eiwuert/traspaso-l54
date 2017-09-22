<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return View::make('frontend.home');
});

Route::get('/portada', function()
{
	return View::make('frontend.home');
});

Route::group(["middleware" => "auth"], function() {

	Route::resource('backend/perfil', 'Backend\PerfilController');

	Route::get('backend', 'ActaController@home');
	Route::get('backend/actas/listado', 'ActaController@getListado');


	Route::get('backend/actas/iniciar/{id}', 'ActaController@getIniciar');
	Route::get('backend/actas/iniciar', 'ActaController@getIniciar');
	Route::get('backend/actas/ver/{id}/publica', 'ActaController@getPublica');

	Route::get('backend/actas/gestion/obtener', 'ActaController@getData');

	Route::resource('backend/actas/gestion', 'Backend\GestionController');
	Route::resource('backend/gestion/instituciones', 'Backend\InstitucionController');
	Route::resource('backend/gestion/usuarios', 'Backend\UsuarioController');
	Route::resource('backend/actas/personal', 'Backend\PersonalController');
	Route::resource('backend/actas/financiera', 'Backend\FinancieraController');
	Route::resource('backend/actas/legal', 'Backend\LegalController');
	Route::resource('backend/actas/inventario', 'Backend\InventarioController');
	Route::resource('backend/actas/administrativa', 'Backend\AdministrativaController');
	Route::resource('backend/actas/participacion', 'Backend\ParticipacionController');
	Route::resource('backend/actas/biblioteca', 'Backend\BibliotecaController');
	Route::resource('backend/actas/otro', 'Backend\OtroAntecedenteController');
	Route::get('backend/actas/otro/descarga/{id}', 'Backend\OtroAntecedenteController@download');
	//Route::get('backend/actas/otro/eliminar/{id}', 'Backend\OtroAntecedenteController@eliminarArchivo');

	Route::resource('backend/actas/auditoria', 'Backend\AuditoriaController');
	Route::get('backend/actas/auditoria-descargar/{id}', 'Backend\AuditoriaController@downloadFile');

	Route::get('404', function()
	{
		return View::make('404');
	});
});

Route::post('backend/autenticar', 'Backend\AuthController@autenticar');
Route::get('backend/callback', 'Backend\AuthController@getCallback');
Route::get('login', 'Backend\AuthController@login');
Route::get('logout', 'Backend\AuthController@logout');

Route::get('/instituciones','Frontend\InstitucionesController@index');
