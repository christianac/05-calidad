<?php

class LoginUsuarioController extends BaseController {

	public $restful=true;
	public function get_index(){
		if(Auth::user()){
			return Redirect::to('/');
		}
			return View::make('login_usuario');
	}

	public function post_index()
	{
		$userdata = array(
			'username'=>Input::get('user'),
			'password'=>Input::get('password')
		);
		if(Auth::attempt($userdata, true))
		{
			return Redirect::to('catalogo');
		}
		else{
			return Redirect::to('login_usuario')->with('error_login', true);
		}
	}
}

?>