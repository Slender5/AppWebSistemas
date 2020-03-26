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

//Rutas-perfil-egreso
Route::get('perfil de egreso', 'PerfilEgresoController@index')->name('perfil-egreso');

Route::get('Editar perfil de egreso', 'PerfilEgresoController@list')->name('editar-perfil-egreso');

Route::get('Editar perfil egreso', 'PerfilEgresoController@create')->name('crear-perfil-egreso');

Route::get('Editar elemento eg', 'PerfilEgresoController@edit')->name('editar-elemento-eg');

Route::resource('NuevoElementoEg', 'PerfilEgresoController');

Route::get('eliminar-elemento-eg/{slug}', 'PerfilEgresoController@destroy')->name('eliminar-elemento-eg');

//Rutas-perfil-ingreso
Route::get('perfil de ingreso', 'PerfilIngresoController@index')->name('perfil-ingreso');

Route::get('Editar perfil de ingreso', 'PerfilIngresoController@list')->name('editar-perfil-ingreso');

Route::get('Editar perfil ingreso', 'PerfilIngresoController@create')->name('crear-perfil-ingreso');

Route::get('Editar elemento', 'PerfilIngresoController@edit')->name('editar-elemento');

Route::resource('NuevoElemento', 'PerfilIngresoController');

Route::get('eliminar-elemento/{slug}', 'PerfilIngresoController@destroy')->name('eliminar-elemento');

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

Route::get('EliminarLineaInvestigacion/{slug}', 'ReticulaController@destroy')->name('eliminar-Linea-Investigacion');



Auth::routes();

Route::get('admin', 'InicioController@index');

Route::get('/home', 'HomeController@index')->name('home');

