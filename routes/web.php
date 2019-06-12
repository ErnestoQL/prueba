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

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/nuevo', function(){
    return 'Crear nuevo usuario';
});

Route::get('/usuarios/{id}', function ($id){
    return "Mostrando detalles del coso: {$id}";
}); //->where('id','[0-9]+');

Route::get('/usuarios/{id}/edit', function($id){
   return "Va a editar el usuario {$id}";
})->where('id','[0-9]+');

