<?php

class ProductosController extends BaseController {

	public function mostrar($id){

		$productos = DB::table('productos')->where('cod_sub_categoria','=', $id)->get();
		return View::make('productos')->with('productos', $productos);
	}
}

?>