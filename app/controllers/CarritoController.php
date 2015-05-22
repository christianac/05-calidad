<?php

class CarritoController extends BaseController {

	
	public function add(){
		$detalles = DB::table('productos')->where('cod_producto','=', $id)->remember(10)->first();
		$codigo = count(Cart::content())+1;
		//Cart::add($codigo, 'Product 1', 1, 9.99);

	}
}

?>