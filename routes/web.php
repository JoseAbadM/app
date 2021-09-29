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
//principal
Route::get('/', function () {
    return view('welcome');
});




Route::get('/matriculas', 'MatriculaController@index');
//Mostrar formulario
Route::get('/matriculas_create', 'MatriculaController@create');
//Almacenar los datos
Route::post('/matriculas', 'MatriculaController@store')->name('mt_create');

Route::get('/persona/persona_index', 'PersonaController@index');
//Mostrar formulario Persona
Route::get('/persona/persona_create','PersonaController@create');
//Almacenar los datos Persona
Route::post('/persona/persona_create','PersonaController@store');

Route::get('/carrera/carrera_index', 'CarreraController@index');
//Mostrar formulario C
Route::get('/carrera/carrera_create','CarreraController@create');
//Almacenar los datos C
Route::post('/carrera/carrera_create','CarreraController@store');


Route::get('/mencion/mencion_index{id}', 'MencionController@index');
//Mostrar formulario C
Route::get('/mencion/mencion_create','MencionController@create');
//Almacenar los datos C
Route::post('/mencion/mencion_create','MencionController@store');

Route::get('/version/version_index{id}', 'VersionController@index');
//Mostrar formulario C
Route::get('/version/version_create','VersionController@create');
//Almacenar los datos C
Route::post('/version/version_create','VersionController@store');




Route::post('/subcategorias',          [App\Http\Controllers\MatriculaController::class, 'subcategorias']);
Route::post('/empresas',          [App\Http\Controllers\MatriculaController::class, 'empresas']);

