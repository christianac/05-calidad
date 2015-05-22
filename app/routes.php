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
/*Route::get('panel_admin', function()
{
		return View::make('admin/panel_admin');
});*/

Route::controller('catalogo', 'CatalogoController');
// ACA solo para administrador
Route::group(['prefix' => 'panel_admin'], function()
        {
            # /catalogo/sub_categoria/
            Route::get('/', function(){
            	return Redirect::to('panel_admin/usuarios');
            });
            ## CRUD Clientes
            # Get, Post, CRUD de usuarios
            Route::get('/usuarios', function(){
            	$usuarios = DB::table('usuarios')->where('id','!=', Auth::id())->where('group_id', '=', '1')->get();
            	return View::make('admin/usuarios')->with('usuarios' , $usuarios);
            });
            Route::post('/usuarios', 'AdminUserController@guardar');
            
            Route::get('/usuarios/edi/{id}', function($id){
                  $usuario = DB::table('usuarios')->where('id','=', $id)->first();
                  return View::make('admin/edit_usuario')->with('usuario' , $usuario)->with('id', $id);
            });
            Route::post('/usuarios/edi', 'AdminUserController@editar');
            Route::get('/usuarios/eli/{id}', function($id){
                  $user = User::find($id);
                  if ($user) {
                        $user->delete();
                        return Redirect::to('panel_admin/usuarios')->with('message' , 'Eliminado con exito');
                  }
                  else {
                        return Redirect::to('panel_admin/usuarios')->with('message' , 'Usuario no existe');
                  }
                  
                  //return Redirect::to('usuarios')->with('message' , 'Eliminado con exito');
            });
            # Fin Usuarios

            Route::get('/categorias', function(){
            	$categorias = DB::table('categoria_productos')->get();
            	return View::make('admin/categorias')->with('categorias' , $categorias);
            });
            Route::get('/sub_categorias', function(){
            	$sub_categorias = DB::table('sub_categoria_productos')->get();
            	return View::make('admin/sub_categorias')->with('sub_categorias' , $sub_categorias);
            });
            Route::get('/productos', function(){
                  $productos = DB::table('productos')
                                    ->join('categoria_productos', 'productos.cod_categoria', '=', 'categoria_productos.cod_categoria')
                                    ->join('sub_categoria_productos', 'productos.cod_sub_categoria', '=', 'sub_categoria_productos.cod_sub_categoria')
                                    ->select('categoria_productos.categoria as cp',
                                                'sub_categoria_productos.subcategoria as scp',
                                                'productos.nom_producto as nombre_pro',
                                                'productos.*')->get();
                  return View::make('admin/productos')->with('productos' , $productos);
            });
            Route::get('/logout', function(){
            	Auth::logout();
            	return Redirect::to('admin');
            });
        });
Route::controller('admin', 'LoginAdminController');
Route::get('/logout', function(){
                  Auth::logout();
                  Cart::destroy();
                  return Redirect::back();
            });
Route::get('sub_categoria/{id}', 'SubCategoriaController@mostrar');
Route::get('productos/{id}', 'ProductosController@mostrar');
Route::post('prod_detalles/add_cart', 'ProdDetalleController@addCart');
Route::get('carrito/d/{id}', function($id){
      Cart::remove($id);
      return View::make('carro');
});
Route::get('carrito', function(){
       return View::make('carro');
});

Route::controller('login_a', 'LoginAdminController');
Route::controller('login_usuario', 'LoginUsuarioController');
Route::get('prod_detalles/{id}', 'ProdDetalleController@index');

