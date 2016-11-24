<?php
use Illuminate\Auth\UserInterface;

class Usuario extends Eloquent implements UserInterface{

	protected $guarded = array();
	public $timestamps = false;
	protected $table = 'usuario';
	protected $fillable = array('nombre', 'correo', 'password');

	public static $rules = array(

		'nombre'	=> 'required',
		'apellido'	=> 'required',
		'fec_nac'	=> 'required',
		'pais'		=> 'required',
		'provincia'	=> 'required',
		'ciudad'	=> 'required',
		'ocupacion'	=> 'required'
	);
	
	public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return ;
    }

    public function setRememberToken($id)
    {
        return ;
    }

    public function getRememberTokenName()
    {
        return ;
    }
}