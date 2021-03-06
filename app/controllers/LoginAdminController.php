<?php

class LoginAdminController extends BaseController {

	public $restful=true;
	public function get_index(){
		if(Auth::user()){
			return Redirect::to('panel_admin');
		}
			return View::make('admin');
	}

	public function post_index()
	{
		$userdata = array(
			'username'=>Input::get('user'),
			'password'=>Input::get('password')
		);
		if(Auth::attempt($userdata, true))
		{
			return Redirect::to('panel_admin');
		}
		else{
			return Redirect::to('login_a')->with('error_login', true);
		}
	}
}

?>