<?php

class ProdDetalleController extends BaseController {

	public function index($id){

		$detalles = DB::table('productos')->where('cod_producto','=', $id)->remember(10)->first();
		return View::make('producto_detalle')->with('detalles', $detalles);
	}

	public function store(){
        if(!Auth::check()){
    		$rules = array(
                'num'   => 'required|alpha_dash',
            );
            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return Redirect::to('producto')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            } else {
                $codigo = Input::get('num');
                $array = array('id' => $codigo);
                Session::put('car2t', $array);
                //Session::push('user.teams', 'developers');
                //Session::flash('message', 'Successfully created user!');
                var_dump(Session::all());
                }
        }

	}
}

?>