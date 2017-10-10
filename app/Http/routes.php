<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |


  Route::get('/', function () {
  $students=DB::table('tipoempleado') ->paginate(4);

  /// $datos = DB::select("SELECT * FROM tipoempleado");
  ///$asda=tipoempleado::latest()->paginate(1);

  return   view('Formularios/tipoempleado',compact('students'));
  });
 */
Route::resource('TipoEmpleado', 'TipoEmpleadoController');
//Route::get('manage-item-ajax', 'TipoEmpleadoController@manageItemAjax');
//-------------Creacion de ABM-1
Route::get('manage-item-ajax', 'ItemAjaxController@manageItemAjax');
Route::resource('item-ajax', 'ItemAjaxController');
Route::resource('Url', 'UrlController');
Route::resource('Modulo', 'ModuloController');
Route::resource('Objeto', 'ObjetoController');
Route::resource('Perfilobjeto', 'PerfilobjetoController');
//--------------Fin----
Route::get('/', 'UrlController@index');
Route::get('BackofficeAdminkatoo', 'UrlController@BackofficeAdminkatoo');
Route::get('/Autenticacion', 'UrlController@Autenticacion');
Route::get('/usuarios', 'UrlController@usuarios');
Route::get('/accesos', 'UrlController@accesos');
Route::get('/modulos','UrlController@modulos');
Route::get('/empresas','UrlController@empresas');

Route::get('/objeto','UrlController@objeto');


Route::post('allmodulo', 'ModuloController@allModulos' )->name('allmodulo');
Route::post('allobjeto', 'ObjetoController@allObjeto' )->name('allobjeto');
Route::get('selectmodulo','ObjetoController@selectmodulo');
  



Route::get('/perfilobjeto','UrlController@perfilobjeto');
 
Route::get('/consultapruba/{id}','PerfilobjetoController@consultapruba')->name('consultaacceso');