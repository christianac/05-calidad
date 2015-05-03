<?php

class CategoriaController extends BaseController {

	public function mostrar($id){

		$productos = DB::table('productos')->where('cod_categoria','=', $id)->get();
		return View::make('categorias')->with('productos', $productos);
	}
}

?>