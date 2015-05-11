<?php

class LoginAdminController extends BaseController {

	public $restful=true;
	public function get_index(){
		if(Auth::user()){
			return Redirect::to('');
		}
			return View::make('panel_admin');
	}

	public function post_index()
	{
		$userdata = array(
			'username'=>Input::get('user'),
			'password'=>Input::get('password')
		);

		if(Auth::attempt($userdata, true))
		{
			return Redirect::to();
		}
		else{
			return Redirect::to()->with('error_login', true);
		}
	}
}

?>