<?php

class AdminUserController extends BaseController {

	public $errors;
	public function validar($data){
		

		$rules = array(
			'full_name' => 'required|max:100|alpha_spaces',
			'email' => 'required|max:100|email',
			'usuario' => 'required|max:50',
			'activo' => 'required',
			'password' => 'required|max:50|min:11|confirmed',
			'password_confirmation' => 'required|max:50|min:11',
		);
		$validator = Validator::make($data, $rules);
		if ($validator->passes())
        {
            return true;
        }
        
        $this->errors = $validator->errors();
        
        return false;
	}

	public function guardar()
	{
		$data = Input::all();
		
		if($this->validar($data)){
			$user = new User;
			$user->nombres = Input::get('full_name');
			$user->email = Input::get('email');
			$user->username = Input::get('usuario');
			$user->estado = Input::get('activo');
			$user->password = Hash::make(Input::get('password'));
			$user->save();
		}
		else{
			return Redirect::to('panel_admin/usuarios')->withInput()->withErrors($this->errors);
		}
	}

	public function editar()
	{
		$data = Input::all();
		
		if($this->validar($data)){
			$user = User::find(Input::get('hidden'));
			$user->nombres = Input::get('full_name');
			$user->email = Input::get('email');
			$user->username = Input::get('usuario');
			$user->estado = Input::get('activo');
			$user->password = Hash::make(Input::get('password'));
			$user->save();
			return Redirect::to('panel_admin/usuarios')->with('message', 'Correctamente Editado');
		}
		else{
			return Redirect::to('panel_admin/usuarios')->withErrors($this->errors);
		}
	}
}

?>