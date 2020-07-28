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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cadastrar_atendimento', 'AtendimentoController@create')->name('cadastrar_atendimento');
Route::get('/meus_atendimentos', 'AtendimentoController@meus_atendimentos')->name('meus_atendimentos');
Route::post('/salvar_atendimento', 'AtendimentoController@save')->name('salvar_atendimento');
Route::get('/cadastrar_tipo_atendimento', 'TipoAtendimentoController@create')->name('cadastrar_tipo_atendimento');
Route::post('/salvar_tipo_atendimento', 'TipoAtendimentoController@save')->name('salvar_tipo_atendimento');
Route::get('/listar_tecnicos', 'GestorController@listar_tecnicos')->name('listar_tecnicos');

