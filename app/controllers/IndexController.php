<?php

class IndexController extends BaseController {

	protected $comunidades;

	public function __construct(Comunidad $comu)
	{
		$this->comunidades = $comu;
	}

	public function index()
	{
		$comu = Comunidad::ultimos()->get();

		return View::make('index', compact('comu'));
	}

}