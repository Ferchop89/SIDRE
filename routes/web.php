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

Route::get('/acceso', 'UserController@login');//Lista
Route::get('/cambio-contraseña', 'UserController@PasswordGeneration');//Lista
Route::get('/recuperacion-contraseña', 'UserController@PasswordRecovery');//Lista
Route::get('/pasos', 'UserController@steps');//Lista
Route::get('/actualizacion', 'UserController@DataUpdate'); //Lista
Route::get('/formato-actualizacion', 'UserController@Format');
Route::get('/adeudo', 'UserController@adeudo');//Lista
Route::get('/cuestionario', 'UserController@Questionnaire');
Route::get('/turno', 'UserController@ReregistrationShift');//Lista
Route::get('/consulta', 'UserController@consulta');//Lista

Route::get('/reinscripcion', 'UserController@ReregistrationShift');





 Route::get('/prueba', 'UserController@pruebas');
