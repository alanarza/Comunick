<?php

class Usuario extends Eloquent{

	protected $guarded = array();
	public $timestamps = false;
	protected $table = 'usuario';

	public static $rules = array(

		'nombre'	=> 'required',
		'apellido'	=> 'required',
		'fec_nac'	=> 'required',
		'pais'		=> 'required',
		'provincia'	=> 'required',
		'ciudad'	=> 'required',
		'ocupacion'	=> 'required'
	);
	
}