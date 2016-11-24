<?php

class UsuarioController extends BaseController {

	public function login()
	{

		$usuario = Input::get('usuario');
		$pass = Input::get('password');

		if (Auth::attempt( array('nombre' => $usuario, 'password' => $pass )))
		{
	        return Redirect::to('personal');
	    }
	    else
	    {
	        return Redirect::to('/')->with('mensaje_login', 'Ingreso invalido para ' . $usuario);
	    }
	}

}