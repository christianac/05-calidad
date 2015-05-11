<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
		return View::make('index');
});

Route::controller('catalogo', 'CatalogoController');
Route::controller('admin', 'LoginAdminController');
/*jjojojo*/
Route::get('sub_categoria/{id}', 'SubCategoriaController@mostrar');
Route::get('productos/{id}', 'ProductosController@mostrar');
Route::post('prod_detalles/add_cart', 'ProdDetalleController@store');
Route::get('prod_detalles/{id}', 'ProdDetalleController@index');

