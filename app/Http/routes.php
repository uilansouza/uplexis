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
*/
/*

Route::get('/', function () {
  
    return 'Primeira Logica';
});*/


Route::get('/consulta','ConsultaController@consulta');
Route::get('/pesquisar','ConsultaController@pesquisaResultado');




# Authentication

//Route::get('/login','LoginController@login');
Route::get('/', 'HomeController@index');

//', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
    ]);
//Route::get('auth/login', 'Auth\AuthController@getLogin');
