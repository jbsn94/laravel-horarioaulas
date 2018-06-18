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
    return view('welcome');
});

Route::get('centros', 'CentrosController@index');

Route::resource('api/v1/centros','ApiCentrosController', ['except' => ['create','edit']]);

Route::resource('api/v1/centros/{centro}/cursos','ApiCursosController', ['except' => ['create','edit']]);

Route::resource('api/v1/centros/{centro}/cursos/{curso}/disciplinas','ApiDisciplinasController', ['except' => ['create','edit']]);

Route::get('centros/{id}/cursos', 'CursosController@index');
