<?php

class RegistrarClienteController extends BaseController {

	public $errors;
	public function validar($data){
		

		$rules = array(
			'full_name' => 'required|max:100|alpha_spaces',
			'direccion' => 'required|alpha_dash',
			'email' => 'required|max:100|email',
			'fec_nac' => 'required|date',
			'telefono' => 'required|max:1000000000|numeric',
			'empresa' => 'required|max:250|alpha_spaces',
			'sexo' => 'required',
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
			$user->direccion = Input::get('direccion');
			$user->email = Input::get('email');
			$user->fecha_nacimiento = Input::get('fec_nac');
			$user->telefono = Input::get('telefono');
			$user->empresa = Input::get('empresa');
			$user->estado = 'A';
			$user->sexo = Input::get('sexo');
			$user->group_id = 0;
			$user->password = Hash::make(Input::get('password'));
			$user->save();
			return Redirect::to('registrarse')->with('message', 'Registrado con exito');
		}
		else{
			return Redirect::to('registrarse')->withInput()->withErrors($this->errors);
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