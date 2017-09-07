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

Route::post('backend/autenticar', 'Backend\AuthController@autenticar');
Route::get('backend/callback', 'Backend\AuthController@getCallback');
Route::get('login', 'Backend\AuthController@login');
Route::get('logout', 'Backend\AuthController@logout');

Route::get('/instituciones','Frontend\InstitucionesController@index');

Route::group(["before" => "auth"], function() {
	Route::get('backend', 'ActaController@home');
	Route::get('backend/actas/listado', 'ActaController@getListado');


	Route::get('backend/actas/iniciar/{id}', 'ActaController@getIniciar');
	Route::get('backend/actas/iniciar', 'ActaController@getIniciar');
	Route::get('backend/actas/ver/{id}/publica', 'ActaController@getPublica');

	Route::get('backend/actas/gestion/obtener', 'ActaController@getData');
	/*Route::post('backend/actas/gestion/guardar', 'ActaController@setData');*/

	Route::resource('backend/actas/gestion', 'Backend\GestionController');
	Route::resource('backend/gestion/instituciones', 'Backend\InstitucionController');
	Route::resource('backend/gestion/usuarios', 'Backend\UsuarioController');
	Route::resource('backend/actas/personal', 'Backend\PersonalController');
	Route::resource('backend/actas/financiera', 'Backend\FinancieraController');
	Route::resource('backend/actas/legal', 'Backend\LegalController');
	Route::resource('backend/actas/inventario', 'Backend\InventarioController');


	Route::get('backend/actas/administrativa', 'Backend\PersonalController@index');
	Route::resource('backend/actas/auditoria', 'Backend\AuditoriaController');
	Route::get('backend/actas/participacion', 'Backend\PersonalController@index');
	Route::get('backend/actas/otro', 'Backend\PersonalController@index');
	//Route::get('backend/actas/iniciar', 'ActaController@iniciar');

	Route::get('404', function()
	{
		return View::make('404');
	});
});
