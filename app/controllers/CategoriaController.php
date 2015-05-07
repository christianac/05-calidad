<?php

class CategoriaController extends BaseController {

	public function mostrar($id){

		$sub_categorias = DB::table('sub_categoria_productos')->where('cod_categoria','=', $id)->get();
		return View::make('categorias')->with('sub_categorias', $sub_categorias);
	}
}

?>