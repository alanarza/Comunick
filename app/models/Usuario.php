<?php
use Illuminate\Auth\UserInterface;

class Usuario extends Eloquent extends UserInterface{

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
}