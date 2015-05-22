<?php

class ProdDetalleController extends BaseController {

	public function index($id){

		$detalles = DB::table('productos')->where('cod_producto','=', $id)->remember(10)->first();
		return View::make('producto_detalle')->with('detalles', $detalles);
	}

	public function addCart(){
        $detalles = DB::table('productos')->where('cod_producto','=', Input::get('id'))->remember(10)->first();
        if(Auth::check()){
    		$rules = array(
                'num'   => 'required',
            );
            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return Redirect::to('producto')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            } else {
                $num = Input::get('num');
                if($detalles->oferta=="SI"){
                    Cart::add(Input::get('id'), $detalles->nom_producto, $num, $detalles->precio_oferta);
                }
                else{
                    Cart::add(Input::get('id'), $detalles->nom_producto, $num, $detalles->precio_normal);
                }
                return View::make('carro');
                }
        }
        else{
            return Redirect::to('login_usuario')->with('detalles', $detalles);
        }

	}
}

?>