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

Route::get('/', 'CentrosController@index');

Route::get('centros', 'CentrosController@index');

Route::resource('api/v1/centros','ApiCentrosController', ['except' => ['create','edit']]);

Route::resource('api/v1/turnos','ApiTurnosController', ['except' => ['create','edit']]);

Route::resource('api/v1/periodos','ApiPeriodosController', ['except' => ['create','edit']]);

Route::resource('api/v1/dias','ApiDiasController', ['except' => ['create','edit']]);

Route::resource('api/v1/centros/{centro}/cursos','ApiCursosController', ['except' => ['create','edit']]);

Route::resource('api/v1/centros/{centro}/cursos/{curso}/disciplinas','ApiDisciplinasController', ['except' => ['create','edit']]);

Route::get('centros/{id}/cursos', 'CursosController@index');

Route::get('centros/{centro}/cursos/{curso}/horarios', 'HorariosController@index');

