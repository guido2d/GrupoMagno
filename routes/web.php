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

Route::view('/', 'index');
Route::view('/contacto', 'contacto');

Route::get('/productos/{categoria}', 'ProductosController@list');

/*ADMIN*/
Auth::routes();
Route::get('logout', function(){
    Auth::logout();
    return view('auth.login');
 });
 
Route::get('/admin', 'HomeController@index');
Route::get('/admin/nuevo-producto', function() {
    return view('admin.nuevo');
});
Route::post('/admin/guardar-producto', 'HomeController@save');
Route::get('/admin/editar-producto/{id}', 'HomeController@editar');
Route::post('/admin/actualizar-producto', 'HomeController@actualizar');
Route::get('/admin/eliminar-producto/{id}', 'HomeController@borrar');