<?php

class CatalogoController extends BaseController {

	public function getIndex(){

		$categorias = DB::table('categoria_productos')->get();
		return View::make('catalogo')->with('categorias', $categorias);
	}
}

?>