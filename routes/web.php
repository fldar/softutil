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

Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);


Route::get('/login',['as'=>'login','uses'=>'Site\LoginController@index']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);


// LINK ========================
Route::get('/links',['as'=>'links','uses'=>'LinkController@index']);
// ENDLINK =====================

Route::group(['middleware' => 'auth'],function(){
  Route::post('/links/salvar',['as'=>'links.salvar','uses'=>'LinkController@salvar']);
  Route::get('/links/deletar/{id}',['as'=>'links.deletar','uses'=>'LinkController@deletar']);
  Route::post('/uteis/salvar',['as'=>'uteis.salvar','uses'=>'UtilController@salvar']);
  Route::get('/uteis/deletar/{id}',['as'=>'uteis.deletar','uses'=>'UtilController@deletar']);

});
