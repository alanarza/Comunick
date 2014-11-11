<?php

class Comunidad extends Eloquent {

	protected $guarded 	= array();
	public $timestamps 	= false;
	protected $table 	= "comunidad";

	public static $rules = array(

		'nombre'		=> 'required',
		'administrador'	=> 'required',
		'fecha_ini'		=> 'required'
	);

	public function scopeUltimos($query){

		return $query->orderBy('id', 'desc')->take(6);
	}

}