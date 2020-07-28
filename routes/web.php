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
Route::get('/listar_tipos_atendimento', 'GestorController@listar_tipos_atendimento')->name('listar_tipos_atendimento');
Route::get('/gerar_relatorio', 'GestorController@gerar_relatorio')->name('gerar_relatorio');
Route::get('/deletar_tipo_atendimento/{id}/', 'GestorController@deletar_tipo_atendimento')->name('deletar_tipo_atendimento');
Route::get('/desativar_tipo_atendimento/{id}/', 'GestorController@desativar_tipo_atendimento')->name('desativar_tipo_atendimento');
Route::get('/ativar_tipo_atendimento/{id}/', 'GestorController@ativar_tipo_atendimento')->name('ativar_tipo_atendimento');
Route::get('/consultar_tipo_atendimento/{id}/', 'GestorController@consultar_tipo_atendimento')->name('consultar_tipo_atendimento');
Route::get('/desativar_tecnico/{id}/', 'GestorController@desativar_tecnico')->name('desativar_tecnico');
Route::get('/ativar_tecnico/{id}/', 'GestorController@ativar_tecnico')->name('ativar_tecnico');
Route::get('/deletar_tecnico/{id}/', 'GestorController@deletar_tecnico')->name('deletar_tecnico');
Route::get('/cadastrar_tecnico/', 'GestorController@cadastrar_tecnico')->name('cadastrar_tecnico');
Route::get('/consultar_tecnico/{id}/', 'GestorController@consultar_tecnico')->name('consultar_tecnico');


