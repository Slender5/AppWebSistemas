<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts/administrador');
    //return view('admin/menu-conocenos/informacion-carrera/view-informacion-carrera');
});

//Rutas-perfil-ingreso
Route::get('Perfil-Ingreso', 'PerfilIngresoController@index')->name('perfil-ingreso');

Route::get('Perfil-Ingreso-Lista', 'PerfilIngresoController@list')->name('editar-perfil-ingreso');

Route::get('Perfil-Ingreso-Crear', 'PerfilIngresoController@create')->name('crear-perfil-ingreso');

Route::get('Perfil-Ingreso-Editar', 'PerfilIngresoController@edit')->name('editar-elemento');

Route::resource('PerfilIngreso', 'PerfilIngresoController');

Route::get('Perfil-Ingreso-Eliminar/{slug}', 'PerfilIngresoController@destroy')->name('eliminar-elemento');

//Rutas-perfil-egreso
Route::get('Perfil-Egreso', 'PerfilEgresoController@index')->name('perfil-egreso');

Route::get('Perfil-Egreso-Lista', 'PerfilEgresoController@list')->name('editar-perfil-egreso');

Route::get('Perfil-Egreso-Crear', 'PerfilEgresoController@create')->name('crear-perfil-egreso');

Route::get('Perfil-Egreso-Editar', 'PerfilEgresoController@edit')->name('editar-elemento-eg');

Route::resource('PerfilEgreso', 'PerfilEgresoController');

Route::get('Perfil-Egreso-Eliminar/{slug}', 'PerfilEgresoController@destroy')->name('eliminar-elemento-eg');


//Rutas-reticula
Route::get('reticula', 'ReticulaController@index')->name('reticula');

Route::get('Crear Reticula', 'ReticulaController@create')->name('crear-reticula');

Route::get('Editar reticula', 'ReticulaController@edit')->name('editar-reticula');

Route::resource('VerReticula', 'ReticulaController');

Route::get('eliminar-reticula/{slug}', 'ReticulaController@destroy')->name('eliminar-reticula');

Route::get('/reticula/descargar/{slug}', 'ReticulaController@download')->name('descargar');

//Rutas Mision, Vision y objetivos

Route::resource('informacion', 'InformacionCarreraController');

//Rutas Lineas Investigación
Route::get('LineasInvestigacion', 'LineasInvestigacionController@index')->name('LineasInvestigacion');

Route::get('CrearLineaInvestigacion', 'LineasInvestigacionController@create')->name('crear-Linea-Investigacion');

Route::get('EditarLineaInvestigacion', 'LineasInvestigacionController@edit')->name('editar-Linea-Investigacion');

Route::resource('Lineas-Investigacion', 'LineasInvestigacionController');

Route::get('Eliminar-Linea-Investigacion/{slug}', 'LineasInvestigacionController@destroy')->name('eliminar-Linea-Investigacion');

//Rutas Cuerpos academicos
Route::resource('CuerposAcademicos', 'CuerposAcademicosController');

//Rutas Campo Laboral
Route::get('Campo-Laboral', 'CampoLaboralController@index')->name('CampoLaboralIndex');

Route::get('Campo-Laboral-Lista', 'CampoLaboralController@list')->name('CampoLaboralLista');

Route::get('Campo-Laboral-Crear', 'CampoLaboralController@create')->name('CampoLaboralCrear');

Route::get('CampoLaboral-Editar', 'CampoLaboralController@edit')->name('CampoLaboralEditar');

Route::resource('CampoLaboral', 'CampoLaboralController');

Route::get('Campo-Laboral-Eliminar/{slug}', 'CampoLaboralController@destroy')->name('CampoLaboralEliminar');




Auth::routes();

Route::get('admin', 'InicioController@index');

Route::get('/home', 'HomeController@index')->name('home');

