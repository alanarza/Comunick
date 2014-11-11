<?php

class Tweet extends Eloquent {
	
	protected $guarded = array();
	public $timestamps = false;
	protected $table = "tweets";

	public static $rules = array(
		'author' => 'required',
		'body' => 'required'
	);
}
